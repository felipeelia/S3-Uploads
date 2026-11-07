<?php
/**
 * Shared helpers for the .fork/ scripts.
 */

const NS_PREFIX = 'Humanmade\\S3_Uploads\\';

/**
 * Root namespaces Strauss moved under NS_PREFIX, read from vendor-prefixed/
 * so that new upstream dependencies are picked up automatically.
 *
 * @return list<string> e.g. [ 'Aws', 'GuzzleHttp', ... ]
 */
function prefixed_roots( string $dir = 'vendor-prefixed' ): array {
	$roots   = [];
	$pattern = '/^namespace\s+' . preg_quote( NS_PREFIX, '/' ) . '([A-Za-z_][A-Za-z0-9_]*)/m';
	foreach ( php_files( $dir ) as $file ) {
		if ( preg_match_all( $pattern, (string) file_get_contents( $file ), $m ) ) {
			foreach ( $m[1] as $ns ) {
				$roots[ $ns ] = true;
			}
		}
	}
	unset( $roots['Composer'] ); // Strauss's own autoloader; never referenced by name.

	if ( ! $roots ) {
		fwrite( STDERR, "No prefixed namespaces found in {$dir}/. Did Strauss run?\n" );
		exit( 1 );
	}
	$roots = array_keys( $roots );
	sort( $roots );
	return $roots;
}

/** @return list<string> */
function php_files( string $dir ): array {
	$files    = [];
	$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $dir, FilesystemIterator::SKIP_DOTS ) );
	foreach ( $iterator as $file ) {
		if ( $file->getExtension() === 'php' ) {
			$files[] = $file->getPathname();
		}
	}
	sort( $files );
	return $files;
}

/**
 * Matches a string literal in PHP source that starts with an unprefixed
 * dependency namespace, such as "Aws\\{$ns}\\{$ns}Client" or '\\Aws\\Sdk'.
 * Group 1 is the opening quote plus any leading backslashes, group 2 the root
 * namespace, group 3 the separator that follows it.
 */
function unprefixed_string_pattern( array $roots ): string {
	return '/([\'"](?:\\\\\\\\|\\\\)?)(' . implode( '|', array_map( 'preg_quote', $roots ) ) . ')(\\\\\\\\|\\\\)(?=[A-Za-z_{$])/';
}

/** Lines that are comments, skipped when scanning dependency code. */
function is_comment_line( string $line ): bool {
	return (bool) preg_match( '#^\s*(\*|//|/\*|\#)#', $line );
}
