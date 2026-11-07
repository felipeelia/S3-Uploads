<?php
/**
 * Turns composer.json into what a consumer of the release should see.
 * Runs in fork-release.yml on the throwaway release commit, after
 * vendor-prefixed/ is built. It never runs on master.
 *
 * - Removes the prefixed packages from "require". vendor-prefixed/ ships in
 *   the release, so consumers must not also download the unprefixed AWS SDK
 *   into their own vendor/.
 * - Removes the Strauss build hooks, which are meaningless without the
 *   dev tooling (and .fork/ is export-ignored).
 *
 * Usage: php .fork/prepare-release.php [plugin-dir]   (defaults to the plugin root)
 */

$dir  = $argv[1] ?? dirname( __DIR__ );
$file = rtrim( $dir, '/' ) . '/composer.json';
$data = json_decode( (string) file_get_contents( $file ), true, 512, JSON_THROW_ON_ERROR );

$packages = $data['extra']['strauss']['packages'] ?? [];
if ( ! $packages ) {
	fwrite( STDERR, "composer.json has no extra.strauss.packages; is this the overlaid tree?\n" );
	exit( 1 );
}
foreach ( $packages as $package ) {
	unset( $data['require'][ $package ] );
}
unset( $data['extra']['strauss'], $data['scripts']['prefix-namespaces'] );

foreach ( [ 'post-install-cmd', 'post-update-cmd' ] as $hook ) {
	if ( isset( $data['scripts'][ $hook ] ) ) {
		$data['scripts'][ $hook ] = array_values( array_diff( (array) $data['scripts'][ $hook ], [ '@prefix-namespaces' ] ) );
		if ( ! $data['scripts'][ $hook ] ) {
			unset( $data['scripts'][ $hook ] );
		}
	}
}
foreach ( [ 'extra', 'scripts' ] as $key ) {
	if ( isset( $data[ $key ] ) && ! $data[ $key ] ) {
		unset( $data[ $key ] );
	}
}

$json = json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR );
$json = preg_replace_callback( '/^( {4})+/m', static fn ( array $m ): string => str_repeat( "\t", (int) ( strlen( $m[0] ) / 4 ) ), $json );
file_put_contents( $file, $json . "\n" );

echo "composer.json prepared for release; removed from require: " . implode( ', ', $packages ) . "\n";
