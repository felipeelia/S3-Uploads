<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: Human Made Limited
Version: 3.0.6
Author URI: https://hmn.md
*/

require_once __DIR__ . '/vendor-prefixed/autoload.php';

spl_autoload_register(
	function( $classname ) {
		// Remove the namespace
		$classname = preg_replace( '/^S3_Uploads\\\/', '', $classname );

		// Format it
		$class = str_replace( [ '_', '\\' ], [ '-', DIRECTORY_SEPARATOR ], strtolower( $classname ) );

		$classpath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'class-' . $class . '.php';

		if ( file_exists( $classpath ) ) {
			include_once $classpath;
		}
	}
);

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0 );
