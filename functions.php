<?php
/**
 * KPBSD Library functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kpbsdlibrary
 */

define( 'KPBSDLIBRARY_MINIMUM_WP_VERSION', '4.7' );
define( 'KPBSDLIBRARY_MINIMUM_PHP_VERSION', '7.0' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KPBSDLIBRARY_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KPBSDLIBRARY_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _kpbsdlibrary_autoload( $class_name ) {
		$namespace = 'WP_Rig\WP_Rig';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}

		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc';
		foreach ( $parts as $part ) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if ( ! file_exists( $path ) ) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register( '_kpbsdlibrary_autoload' );
}

// Load the `kpbsdlibrary()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'WP_Rig\WP_Rig\kpbsdlibrary' );

// enable upload for webp image files.
function webp_upload_mimes( $existing_mimes ) {
	$existing_mimes['webp'] = 'image/webp';
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

//enable preview / thumbnail for webp image files.
function webp_is_displayable( $result, $path ) {
	if ( $result === false ) {
		$displayable_image_types = array( IMAGETYPE_WEBP );
		$info = @getimagesize( $path );

		if ( empty( $info ) ) {
			$result = false;
		} elseif ( !in_array( $info[2], $displayable_image_types ) ) {
			$result = false;
		} else {
			$result = true;
		}
	}

	return $result;
}
add_filter( 'file_is_displayable_image', 'webp_is_displayable', 10, 2 );
