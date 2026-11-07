## Installing this fork with Composer

This is a fork of [humanmade/S3-Uploads](https://github.com/humanmade/S3-Uploads) that ships the AWS SDK and the libraries it depends on **prefixed under its own namespace** (`Humanmade\S3_Uploads\…`), in the plugin's own `vendor-prefixed/` directory. It can't conflict with another plugin, theme or your project using a different version of the AWS SDK, Guzzle or the PSR packages, and installing it adds none of those packages to your project's `vendor/`.

Releases are tagged `<upstream version>.<n>`: `3.0.13.1` is upstream's `3.0.13` plus the prefixing, and `3.0.13.2` would be a fork-only fix on top of it. Each new upstream release is synced here and released as `<new upstream version>.1`.

The package isn't on Packagist, so add this repository to your project:

```
composer config repositories.s3-uploads vcs https://github.com/felipeelia/S3-Uploads
composer config allow-plugins.composer/installers true
composer require humanmade/s3-uploads:^3.0
```

Or in `composer.json`:

```json
{
	"repositories": [
		{ "type": "vcs", "url": "https://github.com/felipeelia/S3-Uploads" }
	],
	"require": {
		"humanmade/s3-uploads": "^3.0"
	}
}
```

- **Same package name as upstream.** Because this repository is listed in your project, Composer installs this fork instead of the upstream package from Packagist.
- **Where it's installed.** [composer/installers](https://github.com/composer/installers) puts it in `wp-content/plugins/s3-uploads/`. (`allow-plugins` above lets it do that. Skip that command if you already allow it.) For another layout, set `installer-paths` in your `composer.json`, for example `"extra": { "installer-paths": { "web/app/plugins/{$name}/": [ "humanmade/s3-uploads" ] } }`.
- **Use tagged releases.** Don't require `dev-master`: the built `vendor-prefixed/` directory only exists on release tags.
- **No Composer autoloader step.** The plugin loads its dependencies itself, so the `require_once __DIR__ . '/vendor/autoload.php'` instruction under "Getting Set Up" below isn't needed (it does no harm if you already load it).
- **Without Composer,** download `manual-install.zip` from the [releases](https://github.com/felipeelia/S3-Uploads/releases) and unzip it into `wp-content/plugins/s3-uploads/`.

Everything under "Configuration" and after applies to this fork unchanged.

