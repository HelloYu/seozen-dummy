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
	wp_enqueue_style('seozen-style', get_template_directory_uri() . '/assets/css/seozen.css', array(), wp_get_theme()->get('Version'));

	// seozen script.
	wp_enqueue_script(
		'seozen-script',
		get_template_directory_uri() . '/assets/js/seozen.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'seozen_scripts');

/**
 * 添加WordPress自定义菜单支持
 * 
 * @return void
 */
function register_seozen_dunmmy_menu() {
	// header-menu是这个菜单放在什么位置的标识
	// 描述字段会显示在后台自定义菜单面板下方，需要选中保存才会生效
	register_nav_menu('header-menu', '我是自定义菜单位置描述');
	// register_nav_menus注册多个自定义菜单
}
add_action('init', 'register_seozen_dunmmy_menu');
