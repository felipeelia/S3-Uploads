#!/usr/bin/env bash
#
# Builds the installable plugin zip from the current commit plus the built
# vendor-prefixed/. The plugin files sit at the root of the zip, with no
# wrapping folder, matching the manual-install.zip of earlier releases that
# existing installations rely on.
#
# Usage (from the plugin root, after `composer install`): bash .fork/build-zip.sh [output.zip]

set -euo pipefail

cd "$(dirname "$0")/.."
OUT="$(cd "$(dirname "${1:-manual-install.zip}")" && pwd)/$(basename "${1:-manual-install.zip}")"

if [ ! -f vendor-prefixed/autoload.php ]; then
	echo "vendor-prefixed/ is missing; run composer install first." >&2
	exit 1
fi

work="$(mktemp -d)"
trap 'rm -rf "$work"' EXIT

# git archive honours export-ignore (.fork/, tests/, ...).
git archive HEAD | tar -x -C "$work"
cp -R vendor-prefixed "$work/"
php .fork/prepare-release.php "$work"

rm -f "$OUT"
(cd "$work" && zip -qr "$OUT" .)
echo "Built ${OUT}"
