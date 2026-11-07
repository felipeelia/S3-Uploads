#!/usr/bin/env bash
#
# Runs the end-to-end tests (.fork/e2e/run.sh) on a throwaway WordPress site:
# MySQL and an S3-compatible server in Docker, WordPress installed with WP-CLI
# and served by PHP's built-in web server. Used by fork-ci.yml and fork-sync.yml,
# and runnable locally.
#
# Needs: docker, php (with GD and mysqli), composer, WP-CLI, curl, jq, and a
# built vendor-prefixed/ (run `composer install` first). Uses ports 9000
# (S3), 3307 (MySQL) and 8080 (WordPress); override with S3_PORT, DB_PORT, WP_PORT.
#
# Usage (from the plugin root): bash .fork/e2e/ci.sh

set -euo pipefail

cd "$(dirname "$0")/../.."

MINIO_IMAGE="${MINIO_IMAGE:-pgsty/minio:RELEASE.2026-08-04T00-00-00Z}"
MYSQL_IMAGE="${MYSQL_IMAGE:-mysql:8.4}"
S3_PORT="${S3_PORT:-9000}"
DB_PORT="${DB_PORT:-3307}"
WP_PORT="${WP_PORT:-8080}"
MINIO_NAME="s3u-e2e-minio"
MYSQL_NAME="s3u-e2e-mysql"

work="$(mktemp -d)"
server_pid=""

cleanup() {
	if [ -n "$server_pid" ]; then
		kill "$server_pid" > /dev/null 2>&1 || true
		wait "$server_pid" > /dev/null 2>&1 || true
	fi
	docker rm -f "$MINIO_NAME" "$MYSQL_NAME" > /dev/null 2>&1 || true
	rm -rf "$work"
}
trap cleanup EXIT
docker rm -f "$MINIO_NAME" "$MYSQL_NAME" > /dev/null 2>&1 || true

for tool in docker php composer wp curl jq; do
	command -v "$tool" > /dev/null || { echo "Missing required tool: ${tool}" >&2; exit 1; }
done

echo "== Building the plugin zip"
bash .fork/build-zip.sh "$work/manual-install.zip"

echo "== Starting S3 (${MINIO_IMAGE}) and MySQL (${MYSQL_IMAGE})"
docker run -d --rm --name "$MINIO_NAME" -p "127.0.0.1:${S3_PORT}:9000" --tmpfs /data \
	-e MINIO_ROOT_USER=AWSACCESSKEY -e MINIO_ROOT_PASSWORD=AWSSECRETKEY \
	"$MINIO_IMAGE" server /data > /dev/null
docker run -d --rm --name "$MYSQL_NAME" -p "127.0.0.1:${DB_PORT}:3306" --tmpfs /var/lib/mysql \
	-e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=wordpress \
	"$MYSQL_IMAGE" > /dev/null

for _ in $(seq 1 60); do
	curl -sf "http://127.0.0.1:${S3_PORT}/minio/health/live" -o /dev/null && break
	sleep 1
done
curl -sf "http://127.0.0.1:${S3_PORT}/minio/health/live" -o /dev/null || { echo "S3 server did not start" >&2; docker logs "$MINIO_NAME" >&2; exit 1; }

# The mysqladmin ping succeeds during the image's temporary init server, so also
# wait until a TCP connection from the host works.
for _ in $(seq 1 90); do
	docker exec "$MYSQL_NAME" mysql -uroot -proot -h127.0.0.1 -e 'SELECT 1' wordpress > /dev/null 2>&1 \
		&& php -r 'exit( @mysqli_connect( "127.0.0.1", "root", "root", "wordpress", (int) $argv[1] ) ? 0 : 1 );' "$DB_PORT" && break
	sleep 1
done
php -r 'exit( @mysqli_connect( "127.0.0.1", "root", "root", "wordpress", (int) $argv[1] ) ? 0 : 1 );' "$DB_PORT" || { echo "MySQL did not start" >&2; docker logs "$MYSQL_NAME" >&2; exit 1; }

echo "== Installing WordPress"
site="http://127.0.0.1:${WP_PORT}"
wp_dir="$work/wordpress"
# Run WP-CLI through php explicitly so the memory limit can be lifted (php.ini may set 128M).
WP="php -d memory_limit=-1 $(command -v wp) --path=${wp_dir}"
mkdir -p "$wp_dir"
$WP core download --quiet
$WP config create --dbname=wordpress --dbuser=root --dbpass=root --dbhost="127.0.0.1:${DB_PORT}" --skip-check --quiet
$WP config set WP_ENVIRONMENT_TYPE local --quiet
$WP core install --url="$site" --title="S3 Uploads e2e" --admin_user=admin --admin_password=admin --admin_email=admin@example.com --skip-email --quiet

PHP_CLI_SERVER_WORKERS=4 php -S "127.0.0.1:${WP_PORT}" -t "$wp_dir" > "$work/server.log" 2>&1 &
server_pid=$!
for _ in $(seq 1 30); do
	curl -sf "$site/" -o /dev/null && break
	sleep 1
done
curl -sf "$site/" -o /dev/null || { echo "WordPress did not start" >&2; cat "$work/server.log" >&2; exit 1; }

echo "== Running the end-to-end tests"
WP="$WP" SITE_URL="$site" S3_ENDPOINT="http://127.0.0.1:${S3_PORT}" PLUGIN_ZIP="$work/manual-install.zip" \
	bash .fork/e2e/run.sh
