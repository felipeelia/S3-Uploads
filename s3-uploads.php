<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: Human Made Limited
Version: 3.0.14.1
Author URI: https://hmn.md
*/

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

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0, 0 );
