#!/usr/bin/env bash
#
# Runs upstream's PHPUnit suite against an S3-compatible server, with the
# prefixed build. Fork version of tests/run-tests.sh.
#
# Differences from upstream's script:
# - The S3 server image is configurable. Upstream's minio/minio image is no
#   longer published on Docker Hub. The default is the community MinIO build.
# - The bucket is created with the plugin's own prefixed SDK, so it doesn't
#   depend on the `mc` client being in the S3 image.
# - Psalm runs separately in CI (fork-ci.yml).
#
# Usage (from the plugin root, after `composer install`): bash .fork/run-tests.sh [phpunit args]

set -euo pipefail

S3_IMAGE="${S3_IMAGE:-pgsty/minio:RELEASE.2026-08-04T00-00-00Z}"
TESTER_IMAGE="${TESTER_IMAGE:-humanmade/plugin-tester:wp-6.8-php8.3}"
S3_CONTAINER="s3-uploads-tests-s3"

cd "$(dirname "$0")/.."

cleanup() { docker rm -f "$S3_CONTAINER" > /dev/null 2>&1 || true; }
trap cleanup EXIT
cleanup

# tests/bootstrap.php expects the endpoint at http://s3:9000 (upstream >= 3.0.14)
# or http://minio:9000 (older), so the server is linked under both names.
docker run --rm -d --name "$S3_CONTAINER" --tmpfs /data \
	-e MINIO_ROOT_USER=AWSACCESSKEY -e MINIO_ROOT_PASSWORD=AWSSECRETKEY \
	"$S3_IMAGE" server /data > /dev/null

echo "Waiting for the S3 server and creating the 'tests' bucket..."
create_bucket='
require "/code/vendor-prefixed/autoload.php";
$s3 = new Humanmade\S3_Uploads\Aws\S3\S3Client( [
	"version" => "latest", "region" => "us-east-1", "endpoint" => "http://s3:9000",
	"use_path_style_endpoint" => true,
	"credentials" => [ "key" => "AWSACCESSKEY", "secret" => "AWSSECRETKEY" ],
] );
if ( ! $s3->doesBucketExist( "tests" ) ) { $s3->createBucket( [ "Bucket" => "tests" ] ); }
'
ready=""
for _ in $(seq 1 30); do
	if docker run --rm --link "$S3_CONTAINER:minio" --link "$S3_CONTAINER:s3" -v "$PWD:/code" --entrypoint=php "$TESTER_IMAGE" -r "$create_bucket" > /dev/null 2>&1; then
		ready=1
		break
	fi
	sleep 1
done
if [ -z "$ready" ]; then
	echo "S3 server did not become ready." >&2
	docker logs "$S3_CONTAINER" >&2 || true
	exit 1
fi

docker run --rm \
	-e AWS_SUPPRESS_PHP_DEPRECATION_WARNING=1 \
	-e S3_UPLOADS_BUCKET=tests -e S3_UPLOADS_KEY=AWSACCESSKEY -e S3_UPLOADS_SECRET=AWSSECRETKEY -e S3_UPLOADS_REGION=us-east-1 \
	--link "$S3_CONTAINER:minio" --link "$S3_CONTAINER:s3" -v "$PWD:/code" \
	--entrypoint=/bin/sh "$TESTER_IMAGE" \
	-c "apk add --no-cache libjpeg-turbo ghostscript imagemagick-pdf > /dev/null 2>&1 && /entrypoint.sh $*"
