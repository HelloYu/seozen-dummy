<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SEOZEN 
 * @subpackage SEOZEN_Dummy
 * @since SEOZEN Dummy 1.0
 */

/**
 * Enqueue scripts and styles.
 *
 * @since SEOZEN Dummy 1.0
 *
 * @return void
 */
function seozen_scripts() {

	// seozen styles.
	wp_enqueue_style( 'seozen-style', get_template_directory_uri() . '/assets/css/seozen.css', array(), wp_get_theme()->get( 'Version' ));

	// seozen script.
	wp_enqueue_script(
		'seozen-script',
		get_template_directory_uri() . '/assets/js/seozen.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'seozen_scripts' );