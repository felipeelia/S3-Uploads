#!/usr/bin/env bash
#
# Builds vendor-prefixed/ with Strauss. Composer runs this from
# post-install-cmd and post-update-cmd (see `composer prefix-namespaces`).
#
# Strauss is pinned and checksum-verified. To upgrade it, change both values
# below; get the checksum with `shasum -a 256 strauss.phar`.

set -euo pipefail

STRAUSS_VERSION="0.31.1"
STRAUSS_SHA256="17dc2baf27b9a3f52834e3db729c8365d8915a80e37a087d253cf705387aa887"

cd "$(dirname "$0")/.."

sha256() {
	if command -v sha256sum > /dev/null; then
		sha256sum "$1" | cut -d' ' -f1
	else
		shasum -a 256 "$1" | cut -d' ' -f1
	fi
}

if [ ! -f strauss.phar ] || [ "$(sha256 strauss.phar)" != "$STRAUSS_SHA256" ]; then
	echo "Downloading Strauss ${STRAUSS_VERSION}..."
	curl -sSfL -o strauss.phar "https://github.com/BrianHenryIE/strauss/releases/download/${STRAUSS_VERSION}/strauss.phar"
	if [ "$(sha256 strauss.phar)" != "$STRAUSS_SHA256" ]; then
		rm -f strauss.phar
		echo "strauss.phar checksum mismatch" >&2
		exit 1
	fi
fi

rm -rf vendor-prefixed
# The AWS SDK is too big for PHP's default 128M.
php -d memory_limit=-1 strauss.phar

# Prefix class names that the SDK builds from strings at runtime.
php .fork/patch-prefixed.php
