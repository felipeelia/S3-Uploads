<?php
/**
 * Post-Strauss fix-ups in vendor-prefixed/. Runs from .fork/build-prefixed.sh.
 *
 * Strauss rewrites namespaces, imports and class references, but not class
 * names built from strings at runtime. The AWS SDK does that in several
 * places, e.g. Sdk::createClient():
 *
 *     $client = "Aws\\{$namespace}\\{$namespace}Client";
 *
 * Left alone, `createS3()` would load the *unprefixed* Aws\S3\S3Client, which
 * either fatals, or silently uses another plugin's copy of the SDK.
 * (Strauss 0.15 rewrote these strings; newer versions don't.)
 *
 * This prefixes every string literal in non-comment code that starts with a
 * prefixed root namespace. check-prefixes.php then verifies none are left.
 */

require __DIR__ . '/lib.php';

chdir( dirname( __DIR__ ) );

$roots   = prefixed_roots();
$pattern = unprefixed_string_pattern( $roots );
$total   = 0;

foreach ( php_files( 'vendor-prefixed' ) as $file ) {
	$lines   = file( $file );
	$changed = 0;

	foreach ( $lines as $i => $line ) {
		if ( is_comment_line( $line ) ) {
			continue;
		}
		$lines[ $i ] = preg_replace_callback(
			$pattern,
			static function ( array $m ): string {
				$sep = $m[3];
				return $m[1] . str_replace( '\\', $sep, NS_PREFIX ) . $m[2] . $sep;
			},
			$line,
			-1,
			$count
		);
		$changed += $count;
	}

	if ( $changed ) {
		file_put_contents( $file, implode( '', $lines ) );
		echo "patch-prefixed: {$changed} string reference(s) in {$file}\n";
		$total += $changed;
	}
}

echo "patch-prefixed: {$total} string reference(s) prefixed.\n";
