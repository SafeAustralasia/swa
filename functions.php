<?php
/**
 * Theme Functions
 * 
 * @package ASM
 */

if ( ! defined( 'ASM_DIR_PATH' ) ) {
	define( 'ASM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ASM_DIR_URI' ) ) {
	define( 'ASM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'ASM_ASSETS_URI' ) ) {
	define( 'ASM_ASSETS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets" );
}

if ( ! defined( 'ASM_BUILD_URI' ) ) {
	define( 'ASM_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build" );
}

if ( ! defined( 'ASM_BUILD_JS_URI' ) ) {
	define( 'ASM_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/js" );
}

if ( ! defined( 'ASM_BUILD_IMG_URI' ) ) {
	define( 'ASM_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/src/img" );
}

if ( ! defined( 'ASM_BUILD_JS_DIR_PATH' ) ) {
	define( 'ASM_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . "/assets/build/js" );
}

if ( ! defined( 'ASM_BUILD_CSS_DIR_PATH' ) ) {
	define( 'ASM_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . "/assets/build/css" );
}

if ( ! defined( 'ASM_BUILD_CSS_URI' ) ) {
	define( 'ASM_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/css" );
}

if ( ! defined( 'ASM_BUILD_LIB_URI' ) ) {
	define( 'ASM_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . "/assets/build/library" );
}

require_once ASM_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once ASM_DIR_PATH . '/inc/helpers/template-tags.php';

function asm_get_theme_instance() {
	// Instantiate main theme class
	\ASM_THEME\Inc\ASM_THEME::get_instance();
}

asm_get_theme_instance();

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';