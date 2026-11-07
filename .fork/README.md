# Fork maintenance

This repository is a fork of [humanmade/S3-Uploads](https://github.com/humanmade/S3-Uploads). It differs in one way: the AWS SDK and its dependencies are bundled in `vendor-prefixed/` under the `Humanmade\S3_Uploads\` namespace, using [Strauss](https://github.com/BrianHenryIE/strauss). The plugin then can't conflict with another copy of the AWS SDK, or Guzzle, on the same site.

## How the fork is kept in sync

The fork doesn't maintain hand-made changes to upstream files. Every change is **generated** by `.fork/apply-overlay.php` on top of a pristine upstream tree. A sync therefore never has merge conflicts. When upstream changes something the overlay relies on, the overlay fails with a message naming the file.

| File | Purpose |
| --- | --- |
| `.fork/sync.sh <tag>` | Creates `sync/upstream-<tag>`: merges the upstream tag (keeping history), resets the tree to upstream, restores the fork-owned files, applies the overlay, commits. |
| `.fork/apply-overlay.php <version>` | Every change to upstream files: Strauss wiring in `composer.json`, the loader in `s3-uploads.php`, prefixed `Aws\…`, `GuzzleHttp\…` and `Psr\…` references in `inc/` and `tests/`, the Psalm config, `.gitignore`, `.gitattributes`, the `Version:` header, and removal of upstream-only workflows. |
| `.fork/build-prefixed.sh` | Run by `composer install` and `composer update`. Downloads the pinned, checksum-verified `strauss.phar`, builds `vendor-prefixed/`, then runs `patch-prefixed.php`. |
| `.fork/patch-prefixed.php` | Prefixes class names the AWS SDK builds from strings at runtime (e.g. `"Aws\\{$ns}\\{$ns}Client"` in `Sdk::createClient()`). Strauss doesn't rewrite these. |
| `.fork/check-prefixes.php` | Guard: resolves every name in the plugin with PHP-Parser and scans `vendor-prefixed/`. Fails on any unprefixed reference. Tests can't catch these, because tests also load the unprefixed SDK from `vendor/`. |
| `.fork/smoke-test.php` | Offline: loads the plugin with only `vendor-prefixed/`, creates an S3 client and signs a request. With `--with-unprefixed-sdk`, does the same while another, unprefixed AWS SDK is loaded. |
| `.fork/run-tests.sh` | Upstream's PHPUnit suite against an S3-compatible server (Docker). |
| `.fork/build-zip.sh`, `.fork/prepare-release.php` | Build the release zip, and the consumer-facing `composer.json` (AWS SDK removed from `require`). |

Workflows (all fork-owned, named `fork-*.yml`):

- **Fork - Sync upstream release** (`fork-sync.yml`): daily. If upstream has a release newer than the last one synced, runs `sync.sh`, runs the checks, and opens a PR titled `Sync upstream X.Y.Z (release X.Y.Z.1)`. The PR is a draft if any check failed.
- **Fork - CI** (`fork-ci.yml`): on PRs and pushes to `master`. Runs the prefixing guard, smoke tests, Psalm and PHPUnit, and uploads the plugin zip as an artifact.
- **Fork - Release** (`fork-release.yml`): on pushes to `master`. If the `Version:` in `s3-uploads.php` has no tag yet, builds, tags a release commit that includes `vendor-prefixed/` (as ElasticPress does), and publishes a GitHub release with `manual-install.zip`.

## Versions

`<upstream version>.<n>`, e.g. `3.0.13.1` for the first release based on upstream 3.0.13. Composer accepts four-part versions and sorts `3.0.13.1` above `3.0.13`. (`3.0.13-prefixed` would be a pre-release in semver, and Composer rejects it as invalid.)

## Common tasks

**Upstream released, a sync PR is open.** Review the upstream changes linked in the PR, make sure CI is green, merge. The release is published automatically.

**A sync PR is a draft (checks failed).** Usually upstream changed something the overlay or the prefixing depends on. Check out the branch, fix `.fork/` (most often `apply-overlay.php`), then re-run the sync locally to regenerate the branch:

```sh
git checkout master && git pull
# bring the fixed .fork/ files onto master first (PR), then:
bash .fork/sync.sh 3.0.14
composer install && php .fork/check-prefixes.php && php .fork/smoke-test.php --with-unprefixed-sdk
git push -f origin sync/upstream-3.0.14
```

**Sync a specific upstream tag**, or re-run one: delete the `sync/upstream-<tag>` branch if it exists, then run the sync workflow manually with the `tag` input.

**Fork-only fix**, without a new upstream release:

1. Put the change in `.fork/` (usually `apply-overlay.php`). **Don't edit upstream files directly:** the next sync resets them to upstream.
2. Re-apply the overlay on top of the current upstream tag: `bash .fork/sync.sh <current-upstream-tag> 2` creates a branch with version `X.Y.Z.2`.
3. Open a PR. Merging releases `X.Y.Z.2`.

**Upgrade Strauss:** change `STRAUSS_VERSION` and `STRAUSS_SHA256` in `build-prefixed.sh`. Then run `composer install` and the checks.

## Setup notes

- Scheduled workflows run only from the default branch (`master`).
- PRs opened with the default `GITHUB_TOKEN` don't trigger `fork-ci.yml`. Add a `FORK_SYNC_TOKEN` secret (fine-grained PAT or GitHub App token, contents + pull requests write) to get CI on sync PRs. Without it, enable "Allow GitHub Actions to create and approve pull requests" in Settings > Actions > General. The sync job runs the main checks itself either way.
- GitHub disables scheduled workflows in repositories with no activity for 60 days. The sync job re-enables itself on each run. If it does get disabled, re-enable it in the Actions tab.
