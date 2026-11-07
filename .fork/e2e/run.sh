#!/usr/bin/env bash
#
# End-to-end test of the built plugin inside a real WordPress site, against an
# S3-compatible server. Covers what the PHPUnit suite and the smoke test can't:
# the released zip running in WordPress (CLI and over HTTP), the WP-CLI
# commands, and coexistence with another plugin that bundles its own,
# unprefixed AWS SDK.
#
# Needs: an installed WordPress site, WP-CLI, curl, jq, composer, php with GD,
# and an S3-compatible server (see .fork/e2e/ci.sh for starting one).
#
# Environment:
#   WP            WP-CLI command line for the site, e.g. "wp --path=/var/www/html"  (required)
#   SITE_URL      URL the site answers on, reachable with curl                        (required)
#   PLUGIN_ZIP    the manual-install.zip to test                                      (required)
#   S3_ENDPOINT   default http://127.0.0.1:9000
#   OTHER_SDK_VERSION  AWS SDK version for the "other plugin", default 3.390.0
#
# It installs the zip as the plugin "s3-uploads-e2e", adds a temporary
# mu-plugin with the S3 settings and a temporary "other AWS plugin", and removes
# all of it, and the attachments it created, when it exits.
#
# Usage: WP="wp --path=..." SITE_URL=... PLUGIN_ZIP=manual-install.zip bash .fork/e2e/run.sh

set -uo pipefail

: "${WP:?Set WP to the WP-CLI command line for the site}"
: "${SITE_URL:?Set SITE_URL}"
: "${PLUGIN_ZIP:?Set PLUGIN_ZIP}"
S3_ENDPOINT="${S3_ENDPOINT:-http://127.0.0.1:9000}"
OTHER_SDK_VERSION="${OTHER_SDK_VERSION:-3.390.0}"
BUCKET="tests"
S3_KEY="AWSACCESSKEY"
S3_SECRET="AWSSECRETKEY"
BUCKET_URL="${S3_ENDPOINT}/${BUCKET}"
PLUGIN_SLUG="s3-uploads-e2e"
OTHER_SLUG="other-aws-plugin-e2e"
MU_FILE="zz-s3-e2e-config.php"

SITE_URL="${SITE_URL%/}"
PLUGIN_ZIP="$(cd "$(dirname "$PLUGIN_ZIP")" && pwd)/$(basename "$PLUGIN_ZIP")"
WORK="$(mktemp -d)"
failures=0
attachments=()
app_password_uuid=""

check() {
	local name="$1"
	shift
	if "$@" > /dev/null 2>&1; then
		echo "ok - ${name}"
	else
		echo "FAIL - ${name}"
		failures=$((failures + 1))
	fi
}

# Prints the output of a failed step so CI logs explain themselves.
must() {
	"$@" || { echo "ERROR: command failed: $*" >&2; exit 2; }
}

http_code() { curl -s -o /dev/null -w '%{http_code}' "$1"; }
content_type() { curl -s -o /dev/null -w '%{content_type}' "$1"; }
starts_with() { [[ "$1" == "$2"* ]]; }
contains() { [[ "$1" == *"$2"* ]]; }

cleanup() {
	local id
	for id in "${attachments[@]:-}"; do
		[ -n "$id" ] && $WP post delete "$id" --force > /dev/null 2>&1
	done
	[ -n "$app_password_uuid" ] && $WP user application-password delete 1 "$app_password_uuid" > /dev/null 2>&1
	$WP plugin deactivate "$PLUGIN_SLUG" "$OTHER_SLUG" > /dev/null 2>&1
	[ -n "${CONTENT:-}" ] && rm -rf "${CONTENT}/plugins/${PLUGIN_SLUG}" "${CONTENT}/plugins/${OTHER_SLUG}" "${CONTENT}/mu-plugins/${MU_FILE}"
	rm -rf "$WORK"
}
trap cleanup EXIT

echo "== Setup"
must curl -sf "${S3_ENDPOINT}/minio/health/live" -o /dev/null
CONTENT="$($WP eval 'echo WP_CONTENT_DIR;' 2> /dev/null | tail -1)"
[ -d "$CONTENT" ] || { echo "ERROR: cannot find wp-content via WP-CLI" >&2; exit 2; }
echo "wp-content: ${CONTENT}"
echo "PHP: $($WP eval 'echo PHP_VERSION;' 2> /dev/null | tail -1), WordPress: $($WP core version 2> /dev/null | tail -1)"

rm -rf "${CONTENT}/plugins/${PLUGIN_SLUG}"
mkdir -p "${CONTENT}/plugins/${PLUGIN_SLUG}" "${CONTENT}/mu-plugins"
must unzip -q "$PLUGIN_ZIP" -d "${CONTENT}/plugins/${PLUGIN_SLUG}"
[ -f "${CONTENT}/plugins/${PLUGIN_SLUG}/vendor-prefixed/autoload.php" ] || { echo "ERROR: zip has no vendor-prefixed/" >&2; exit 2; }

# Create the bucket, readable without credentials, using the plugin's own prefixed SDK.
cat > "${WORK}/bucket.php" << PHP
<?php
require '${CONTENT}/plugins/${PLUGIN_SLUG}/vendor-prefixed/autoload.php';
\$s3 = new Humanmade\S3_Uploads\Aws\S3\S3Client( [ 'version' => 'latest', 'region' => 'us-east-1', 'endpoint' => '${S3_ENDPOINT}', 'use_path_style_endpoint' => true, 'credentials' => [ 'key' => '${S3_KEY}', 'secret' => '${S3_SECRET}' ] ] );
if ( ! \$s3->doesBucketExist( '${BUCKET}' ) ) { \$s3->createBucket( [ 'Bucket' => '${BUCKET}' ] ); }
\$s3->putBucketPolicy( [ 'Bucket' => '${BUCKET}', 'Policy' => json_encode( [ 'Version' => '2012-10-17', 'Statement' => [ [ 'Effect' => 'Allow', 'Principal' => '*', 'Action' => [ 's3:GetObject' ], 'Resource' => [ 'arn:aws:s3:::${BUCKET}/*' ] ] ] ] ) ] );
PHP
must php "${WORK}/bucket.php"

cat > "${CONTENT}/mu-plugins/${MU_FILE}" << PHP
<?php
// Temporary: written by .fork/e2e/run.sh and removed when it exits.
define( 'S3_UPLOADS_BUCKET', '${BUCKET}' );
define( 'S3_UPLOADS_KEY', '${S3_KEY}' );
define( 'S3_UPLOADS_SECRET', '${S3_SECRET}' );
define( 'S3_UPLOADS_REGION', 'us-east-1' );
define( 'S3_UPLOADS_BUCKET_URL', '${BUCKET_URL}' );
add_filter( 's3_uploads_s3_client_params', function ( \$params ) {
	\$params['endpoint']                = '${S3_ENDPOINT}';
	\$params['use_path_style_endpoint'] = true;
	return \$params;
} );
PHP

must $WP plugin activate "$PLUGIN_SLUG"

# A 1600x1200 test image.
must php -r '$i = imagecreatetruecolor( 1600, 1200 ); for ( $y = 0; $y < 1200; $y += 40 ) { imagefilledrectangle( $i, 0, $y, 1600, $y + 20, imagecolorallocate( $i, $y % 255, 120, 200 ) ); } imagejpeg( $i, $argv[1], 90 );' "${WORK}/e2e-image.jpg"

echo "== WP-CLI: configuration"
check "wp s3-uploads verify (write and delete on S3)" $WP s3-uploads verify

echo "== Media upload from the CLI"
ID="$($WP media import "${WORK}/e2e-image.jpg" --porcelain 2> /dev/null | tail -1)"
attachments+=("$ID")
check "media import created an attachment" test -n "$ID" -a "$ID" -gt 0
URL="$($WP eval "echo wp_get_attachment_url(${ID});" 2> /dev/null | tail -1)"
check "attachment URL points at the bucket" starts_with "$URL" "${BUCKET_URL}/uploads/"
SIZES="$($WP eval "echo count( wp_get_attachment_metadata( ${ID} )['sizes'] ?? [] );" 2> /dev/null | tail -1)"
check "image sizes were generated (${SIZES})" test "${SIZES:-0}" -ge 4
curl -s -o "${WORK}/original.jpg" "$URL"
check "original is served from S3 and is identical to the upload" cmp "${WORK}/original.jpg" "${WORK}/e2e-image.jpg"
THUMB="$($WP eval "echo wp_get_attachment_image_url( ${ID}, 'thumbnail' );" 2> /dev/null | tail -1)"
check "thumbnail is served from S3 as image/jpeg" test "$(http_code "$THUMB")" = 200 -a "$(content_type "$THUMB")" = image/jpeg
check "get-attachment-files lists the files" contains "$($WP s3-uploads get-attachment-files "$ID" 2> /dev/null)" "e2e-image"

echo "== Media upload over HTTP (REST API)"
APP_PW="$($WP user application-password create 1 e2e --porcelain 2> /dev/null | tail -1)"
app_password_uuid="$($WP user application-password list 1 --format=json 2> /dev/null | jq -r '[.[] | select(.name == "e2e")][0].uuid')"
ADMIN="$($WP user get 1 --field=user_login 2> /dev/null | tail -1)"
code="$(curl -s -u "${ADMIN}:${APP_PW}" -H 'Content-Disposition: attachment; filename=e2e-rest.jpg' -H 'Content-Type: image/jpeg' \
	--data-binary "@${WORK}/e2e-image.jpg" "${SITE_URL}/?rest_route=/wp/v2/media" -o "${WORK}/rest.json" -w '%{http_code}')"
check "REST upload returned 201" test "$code" = 201
REST_ID="$(jq -r '.id // empty' "${WORK}/rest.json" 2> /dev/null)"
attachments+=("$REST_ID")
REST_URL="$(jq -r '.source_url // empty' "${WORK}/rest.json" 2> /dev/null)"
check "REST upload URL points at the bucket" starts_with "$REST_URL" "${BUCKET_URL}/uploads/"
check "REST-uploaded file is served from S3" test "$(http_code "$REST_URL")" = 200
check "REST upload generated image sizes" test "$(jq -r '.media_details.sizes | length' "${WORK}/rest.json" 2> /dev/null)" -ge 4

echo "== WP-CLI: file commands"
ATTACHED="$($WP post meta get "$ID" _wp_attached_file 2> /dev/null | tail -1)"
check "cp copies an object within the bucket" $WP s3-uploads cp "s3://${BUCKET}/uploads/${ATTACHED}" "s3://${BUCKET}/uploads/e2e-copy/copy.jpg"
check "copied object is served" test "$(http_code "${BUCKET_URL}/uploads/e2e-copy/copy.jpg")" = 200
check "ls lists the copied object" contains "$($WP s3-uploads ls 2> /dev/null)" "e2e-copy/copy.jpg"
check "rm deletes it" $WP s3-uploads rm uploads/e2e-copy/copy.jpg
check "deleted object is gone" test "$(http_code "${BUCKET_URL}/uploads/e2e-copy/copy.jpg")" = 404
mkdir -p "${WORK}/dir/sub"
echo hello > "${WORK}/dir/a.txt"
echo nested > "${WORK}/dir/sub/b.txt"
check "upload-directory uploads a tree (uses the SDK's Transfer)" $WP s3-uploads upload-directory "${WORK}/dir" uploads/e2e-dir
check "uploaded file is served" test "$(curl -s "${BUCKET_URL}/uploads/e2e-dir/a.txt")" = hello
check "nested file is served" test "$(curl -s "${BUCKET_URL}/uploads/e2e-dir/sub/b.txt")" = nested
$WP s3-uploads rm uploads/e2e-dir --regex='.*' > /dev/null 2>&1

echo "== Coexistence with another plugin that bundles its own AWS SDK"
OTHER_DIR="${CONTENT}/plugins/${OTHER_SLUG}"
mkdir -p "$OTHER_DIR"
cat > "${OTHER_DIR}/composer.json" << JSON
{ "require": { "aws/aws-sdk-php": "${OTHER_SDK_VERSION}" } }
JSON
must composer install --working-dir="$OTHER_DIR" --no-interaction --no-progress --no-security-blocking --ignore-platform-reqs
cat > "${OTHER_DIR}/${OTHER_SLUG}.php" << PHP
<?php
/*
Plugin Name: Other AWS plugin (e2e)
Description: Temporary. Bundles its own unprefixed AWS SDK to test coexistence with S3 Uploads.
*/
require_once __DIR__ . '/vendor/autoload.php';

add_action( 'init', function () {
	if ( ! isset( \$_GET['e2e_conflict'] ) ) {
		return;
	}
	header( 'Content-Type: text/plain' );
	\$other = new Aws\S3\S3Client( [ 'version' => 'latest', 'region' => 'us-east-1', 'endpoint' => '${S3_ENDPOINT}', 'use_path_style_endpoint' => true, 'credentials' => [ 'key' => '${S3_KEY}', 'secret' => '${S3_SECRET}' ] ] );
	\$buckets = array_map( fn( \$b ) => \$b['Name'], \$other->listBuckets()['Buckets'] );
	\$ours = S3_Uploads\Plugin::get_instance()->s3();
	\$ours->putObject( [ 'Bucket' => '${BUCKET}', 'Key' => 'uploads/e2e-conflict.txt', 'Body' => 'ok' ] );
	\$ours->deleteObject( [ 'Bucket' => '${BUCKET}', 'Key' => 'uploads/e2e-conflict.txt' ] );
	echo 'other-client=', get_class( \$other ), "\n";
	echo 'other-file=', ( new ReflectionClass( \$other ) )->getFileName(), "\n";
	echo 'other-buckets=', implode( ',', \$buckets ), "\n";
	echo 'ours-client=', get_class( \$ours ), "\n";
	echo 'ours-file=', ( new ReflectionClass( \$ours ) )->getFileName(), "\n";
	echo "ours-put-delete=ok\n";
	exit;
} );
PHP
must $WP plugin activate "$OTHER_SLUG"

out="$(curl -s "${SITE_URL}/?e2e_conflict=1")"
field() { sed -n "s/^$1=//p" <<< "$out" | head -1; }
echo "other SDK ${OTHER_SDK_VERSION}: $(field other-client) | ours: $(field ours-client)"
check "other plugin uses its own unprefixed client" test "$(field other-client)" = 'Aws\S3\S3Client'
check "other plugin's client can talk to S3" contains "$(field other-buckets)" "$BUCKET"
check "S3 Uploads uses its prefixed client" test "$(field ours-client)" = 'Humanmade\S3_Uploads\Aws\S3\S3Client'
check "the two clients come from different copies of the SDK" test -n "$(field other-file)" -a "$(field other-file)" != "$(field ours-file)"
check "S3 Uploads can write and delete while both are loaded" test "$(field ours-put-delete)" = ok
check "wp s3-uploads verify with both loaded" $WP s3-uploads verify
ID2="$($WP media import "${WORK}/e2e-image.jpg" --porcelain 2> /dev/null | tail -1)"
attachments+=("$ID2")
URL2="$($WP eval "echo wp_get_attachment_url(${ID2});" 2> /dev/null | tail -1)"
check "media import with both loaded is served from S3" test "$(http_code "$URL2")" = 200

echo "== Deleting attachments removes the files from S3"
check "delete attachment" $WP post delete "$ID" --force
check "original is gone after deleting the attachment" test "$(http_code "$URL")" = 404
check "thumbnail is gone after deleting the attachment" test "$(http_code "$THUMB")" = 404
attachments=("$REST_ID" "$ID2")

echo
if [ "$failures" -gt 0 ]; then
	echo "${failures} check(s) FAILED"
	exit 1
fi
echo "All end-to-end checks passed."
