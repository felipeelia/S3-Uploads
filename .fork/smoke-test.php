<?php
/**
 * Offline smoke test for the prefixed build. Needs no network, Docker or WordPress.
 *
 * Usage (from the plugin root): php .fork/smoke-test.php [--with-unprefixed-sdk]
 *
 * It checks that:
 * - the plugin bootstraps with only vendor-prefixed/ (as a release build or zip install does),
 * - every class in inc/ loads through the plugin's own autoloader,
 * - the prefixed SDK can build an S3 client and sign a request,
 * - with --with-unprefixed-sdk, all of the above still works while another
 *   (unprefixed) AWS SDK is loaded in the same process, which is the scenario
 *   the fork exists for.
 */

error_reporting( E_ALL );
set_error_handler( static function ( int $no, string $str, string $file, int $line ): bool {
	throw new ErrorException( $str, 0, $no, $file, $line );
} );

$root = dirname( __DIR__ );

// Minimal WordPress stand-ins needed to load the plugin entry file.
function add_action( ...$args ): void {}
function add_filter( ...$args ): void {}

if ( in_array( '--with-unprefixed-sdk', $argv, true ) ) {
	// vendor/ holds the plain AWS SDK as a dev dependency. Load it first, as
	// another plugin would on a real site.
	require $root . '/vendor/autoload.php';
	check( class_exists( 'Aws\\S3\\S3Client' ), 'unprefixed SDK is loaded alongside' );
}

require $root . '/s3-uploads.php';

foreach ( glob( $root . '/inc/class-*.php' ) as $file ) {
	$class = 'S3_Uploads\\' . str_replace( '-', '_', ucwords( substr( basename( $file, '.php' ), 6 ), '-' ) );
	if ( $class === 'S3_Uploads\\Wp_Cli_Command' ) {
		continue; // Extends \WP_CLI_Command, which only exists under WP-CLI.
	}
	if ( $class === 'S3_Uploads\\Image_Editor_Imagick' ) {
		continue; // Extends \WP_Image_Editor_Imagick, which only exists in WordPress.
	}
	check( class_exists( $class ), "{$class} autoloads" );
}

check( class_exists( 'Humanmade\\S3_Uploads\\Aws\\S3\\S3Client' ), 'prefixed S3Client autoloads' );

// Mirrors Plugin::get_aws_sdk() and Plugin::s3().
$sdk = new Humanmade\S3_Uploads\Aws\Sdk( [
	'version'     => 'latest',
	'region'      => 'us-east-1',
	'signature'   => 'v4',
	'credentials' => [ 'key' => 'AKIDEXAMPLE', 'secret' => 'secret' ],
] );
$s3 = $sdk->createS3();
check( $s3 instanceof Humanmade\S3_Uploads\Aws\S3\S3Client, 'Sdk::createS3() returns the prefixed client' );

$command = $s3->getCommand( 'GetObject', [ 'Bucket' => 'example-bucket', 'Key' => 'uploads/test.jpg' ] );
$url     = (string) $s3->createPresignedRequest( $command, '+10 minutes' )->getUri();
check( str_contains( $url, 'X-Amz-Signature=' ) && str_contains( $url, 'uploads/test.jpg' ), 'signs a presigned GetObject URL' );

$iterator = Humanmade\S3_Uploads\Aws\flatmap( [ [ 1 ], [ 2 ] ], static fn ( array $x ): array => $x );
check( iterator_to_array( $iterator, false ) === [ 1, 2 ], 'prefixed namespaced functions (Aws\\flatmap) load' );

echo "Smoke test passed.\n";

function check( bool $ok, string $what ): void {
	if ( ! $ok ) {
		fwrite( STDERR, "FAIL: {$what}\n" );
		exit( 1 );
	}
	echo "ok - {$what}\n";
}
