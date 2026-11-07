<?php
/**
 * Applies this fork's changes on top of a pristine upstream S3 Uploads tree.
 *
 * Usage (from the plugin root): php .fork/apply-overlay.php <version>
 *
 * It must only ever run against an unmodified upstream checkout. The sync
 * workflow guarantees that by resetting the tree to the upstream tag first.
 * Every edit is anchored on a known string and the script fails loudly when
 * an anchor is missing, so upstream changes that break an assumption here
 * stop the sync instead of producing a silently broken release.
 */

const NS_PREFIX = 'Humanmade\\S3_Uploads\\';

/**
 * Root namespaces that Strauss moves under NS_PREFIX. A reference to any of
 * these in the plugin's own code has to be rewritten. check-prefixes.php
 * reads the real list from vendor-prefixed/ and fails on any reference that
 * this list missed, so a new upstream dependency can't slip through.
 */
const VENDOR_NAMESPACES = [ 'Aws', 'AWS', 'GuzzleHttp', 'Psr', 'JmesPath', 'Symfony' ];

/** Upstream files the fork does not want (upstream-only CI and tooling). */
const REMOVE_PATHS = [
	'.github/workflows/ci.yml',
	'.github/workflows/backport-from-label.yml',
];

if ( $argc !== 2 || ! preg_match( '/^\d+\.\d+\.\d+\.\d+$/', $argv[1] ) ) {
	fail( 'Usage: php .fork/apply-overlay.php <upstream-version>.<n>, e.g. 3.0.13.1' );
}
$version = $argv[1];
$root    = dirname( __DIR__ );
chdir( $root );

if ( str_contains( (string) file_get_contents( 's3-uploads.php' ), 'vendor-prefixed' ) ) {
	fail( 'The overlay has already been applied to this tree. Run it on a pristine upstream checkout.' );
}

composer_json();
plugin_entry_file( $version );
rewrite_vendor_references();
psalm_config();
gitignore();

foreach ( REMOVE_PATHS as $path ) {
	if ( file_exists( $path ) ) {
		unlink( $path );
		echo "Removed {$path}\n";
	}
}

echo "Overlay applied for version {$version}.\n";

/**
 * Wires Strauss into composer.json. The build logic lives in
 * .fork/build-prefixed.sh so the composer.json diff stays small.
 */
function composer_json(): void {
	$data = json_decode( (string) file_get_contents( 'composer.json' ), true, 512, JSON_THROW_ON_ERROR );

	if ( empty( $data['require']['aws/aws-sdk-php'] ) ) {
		fail( 'composer.json: aws/aws-sdk-php is no longer in "require". Revisit the prefixing setup.' );
	}

	// Strauss can take minutes on the AWS SDK; Composer kills scripts after 300s by default.
	$data['scripts']['prefix-namespaces'] = [
		'Composer\\Config::disableProcessTimeout',
		'bash .fork/build-prefixed.sh',
	];
	foreach ( [ 'post-install-cmd', 'post-update-cmd' ] as $hook ) {
		$existing              = (array) ( $data['scripts'][ $hook ] ?? [] );
		$data['scripts'][ $hook ] = array_values( array_unique( array_merge( $existing, [ '@prefix-namespaces' ] ) ) );
	}

	$data['extra']['strauss'] = [
		'target_directory'       => 'vendor-prefixed',
		'namespace_prefix'       => NS_PREFIX,
		'classmap_prefix'        => 'Humanmade_S3_Uploads_',
		'constant_prefix'        => 'HUMANMADE_S3_UPLOADS_',
		'packages'               => [ 'aws/aws-sdk-php' ],
		'update_call_sites'      => false,
		'delete_vendor_packages' => false,
		'include_modified_date'  => false,
		'include_author'         => false,
	];

	write_json( 'composer.json', $data );
	echo "Updated composer.json\n";
}

/**
 * Loads the prefixed dependencies and the plugin's own classes from the plugin
 * directory, so the plugin never relies on a site-wide vendor/autoload.php.
 */
function plugin_entry_file( string $version ): void {
	$file     = 's3-uploads.php';
	$contents = (string) file_get_contents( $file );

	$contents = replace_once(
		$file,
		$contents,
		'/^Version:\s*\S+\s*$/m',
		'Version: ' . $version
	);

	$loader = <<<'PHP'
if ( file_exists( __DIR__ . '/vendor-prefixed/autoload.php' ) ) {
	require_once __DIR__ . '/vendor-prefixed/autoload.php';
}

spl_autoload_register(
	function ( $classname ) {
		if ( strpos( $classname, 'S3_Uploads\\' ) !== 0 ) {
			return;
		}

		$class     = substr( $classname, strlen( 'S3_Uploads\\' ) );
		$class     = str_replace( [ '_', '\\' ], [ '-', DIRECTORY_SEPARATOR ], strtolower( $class ) );
		$classpath = __DIR__ . '/inc/class-' . $class . '.php';

		if ( file_exists( $classpath ) ) {
			require_once $classpath;
		}
	}
);

PHP;

	$anchor   = "require_once __DIR__ . '/inc/namespace.php';";
	$contents = replace_once(
		$file,
		$contents,
		'/^' . preg_quote( $anchor, '/' ) . '$/m',
		$loader . "\n" . $anchor
	);

	file_put_contents( $file, $contents );
	echo "Updated {$file}\n";
}

/**
 * Points every reference to a prefixed dependency at the prefixed copy.
 *
 * Handles three forms:
 * - import statements: `use Aws\Result;`, `use Aws;`
 * - fully qualified names: `\Aws\flatmap(`, including in docblocks
 * - class names in string literals: `'\\Aws\\S3\\S3Client'`, `'Aws\S3\S3Client'`
 *
 * Relative names such as `Aws\Sdk` are left alone, because they resolve
 * through an import (`use Aws;`) that the first rule already rewrites.
 * check-prefixes.php verifies the result by resolving every name with
 * PHP-Parser.
 */
function rewrite_vendor_references(): void {
	$ns    = implode( '|', VENDOR_NAMESPACES );
	$files = array_merge( [ 's3-uploads.php' ], glob( 'inc/*.php' ), glob( 'tests/*.php' ) );

	foreach ( $files as $file ) {
		$original = (string) file_get_contents( $file );

		// `use Aws\X;`, `use Aws;`, `use function Aws\x;`.
		$contents = preg_replace(
			'/^(\s*use\s+(?:function\s+|const\s+)?)\\\\?((?:' . $ns . ')(?:\\\\|\s*;|\s+as\s))/m',
			'$1' . addcslashes( NS_PREFIX, '\\' ) . '$2',
			$original
		);

		// `\Aws\...` that is not already part of a longer name.
		$contents = preg_replace(
			'/(?<![\w\\\\])\\\\(' . $ns . ')\\\\(?=[A-Za-z_])/',
			'\\\\' . addcslashes( NS_PREFIX, '\\' ) . '$1\\\\',
			$contents
		);

		// Class names in string literals, with `\\` or `\` separators.
		$contents = preg_replace_callback(
			'/([\'"])((?:\\\\\\\\)?)(' . $ns . ')(\\\\\\\\|\\\\)(?=[A-Za-z_])/',
			static function ( array $m ): string {
				$sep    = $m[4];
				$prefix = str_replace( '\\', $sep, NS_PREFIX );
				return $m[1] . $m[2] . $prefix . $m[3] . $sep;
			},
			$contents
		);

		if ( $contents !== $original ) {
			file_put_contents( $file, $contents );
			echo "Rewrote vendor references in {$file}\n";
		}
	}
}

/**
 * Keeps Psalm from analysing the prefixed SDK and lets it resolve the
 * prefixed classes.
 */
function psalm_config(): void {
	$file = 'psalm.xml';
	if ( ! file_exists( $file ) ) {
		return;
	}

	$contents = (string) file_get_contents( $file );
	$contents = replace_once(
		$file,
		$contents,
		'/(<ignoreFiles>\s*\n)/',
		static fn ( array $m ): string => $m[1]
			. "            <directory name=\"vendor-prefixed\"/>\n"
			. "            <directory name=\".fork\"/>\n"
	);
	$contents = replace_once(
		$file,
		$contents,
		'/<psalm\b/',
		"<psalm\n    autoloader=\"psalm/fork-autoload.php\""
	);
	file_put_contents( $file, $contents );

	file_put_contents(
		'psalm/fork-autoload.php',
		"<?php\n// Added by .fork/apply-overlay.php: lets Psalm resolve the prefixed dependencies.\n" .
		"require_once dirname( __DIR__ ) . '/vendor-prefixed/autoload.php';\n"
	);
	echo "Updated {$file}\n";
}

function gitignore(): void {
	append_lines( '.gitignore', [ 'vendor-prefixed/', 'strauss.phar' ] );
	// Keeps the fork tooling out of `git archive` (the release zip) and Composer dist installs.
	append_lines( '.gitattributes', [ '/.fork export-ignore', '/.github export-ignore' ] );
}

function append_lines( string $file, array $lines ): void {
	$contents = file_exists( $file ) ? rtrim( (string) file_get_contents( $file ) ) . "\n" : '';
	foreach ( $lines as $line ) {
		if ( ! preg_match( '/^' . preg_quote( $line, '/' ) . '$/m', $contents ) ) {
			$contents .= $line . "\n";
		}
	}
	file_put_contents( $file, $contents );
}

/**
 * Replaces exactly one regex match. A string replacement is used literally
 * (no `$1` or backslash handling); pass a callable to build it from the match.
 *
 * @param string|callable(array<int, string>): string $replacement
 */
function replace_once( string $file, string $contents, string $pattern, string|callable $replacement ): string {
	$callback = is_string( $replacement ) ? static fn (): string => $replacement : $replacement;
	$result   = preg_replace_callback( $pattern, $callback, $contents, 1, $count );
	if ( $count !== 1 ) {
		fail( "{$file}: expected exactly one match for {$pattern}, found {$count}. Upstream changed this file; update .fork/apply-overlay.php." );
	}
	return (string) $result;
}

/** Writes JSON with tab indentation, matching upstream's composer.json style. */
function write_json( string $file, array $data ): void {
	$json = json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR );
	$json = preg_replace_callback(
		'/^( {4})+/m',
		static fn ( array $m ): string => str_repeat( "\t", (int) ( strlen( $m[0] ) / 4 ) ),
		$json
	);
	file_put_contents( $file, $json . "\n" );
}

function fail( string $message ): never {
	fwrite( STDERR, "apply-overlay: {$message}\n" );
	exit( 1 );
}
