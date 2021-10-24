<?php
/**
 * Bootstraps the Theme.
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class ASM_THEME {
	use Singleton;

	protected function __construct() {

		// Load class.
		Assets::get_instance();
		Menus::get_instance();
		Meta_Boxes::get_instance();
		Sidebars::get_instance();
		Blocks::get_instance();
		Block_Patterns::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * https://developer.wordpress.org/themes/functionality/
		 * Actions.
		 */
		add_action( 'after_setup_theme', [$this, 'setup_theme'] );
	}

	public function setup_theme() {
		// Add support the title tags
		add_theme_support( 'title-tag' );


		add_theme_support( 'custom-logo', [
			'header-text' => [ 'site-title', 'site-description' ],
			'height' => 100,
			'width' => 400,
			'flex-height' => true,
			'flex-width' => true
		] );
		
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


		/**
		 * Register image sizes.
		 */
		add_image_size( 'featured-thumbnail', 350, 233, true );


		// Add theme support for selective refresh for widgets.
		/**
		 * WordPress 4.5 includes a new Customizer framework called selective refresh
		 *
		 * Selective refresh is a hybrid preview mechanism that has the performance benefit of not having to refresh the entire preview window.
		 *
		 * @link https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 
			'html5', 
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style'
			]
		);

		/**
		 * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
		 * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
		 * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
		 * @see Theme Styles.
		 * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * Some blocks such as the image block have the possibility to define
		 * a “wide” or “full” alignment by adding the corresponding classname
		 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
		 * add_theme_support( 'align-wide' ), like we have done below.
		 *
		 * @see Wide Alignment
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
		 */
		add_theme_support( 'align-wide' );

		/**
		 * Loads the editor styles in the Gutenberg editor.
		 *
		 * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
		 * If we don't add this, the editor styles will only load in the classic editor ( tiny mice )
		 *
		 * @see https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
		 */
		add_theme_support( 'editor-styles' );

		add_editor_style( 'assets/build/css/editor.css' );

		//remove_theme_support('core-block-patterns');

		// sets maximum content width
		global $content_width;
		if( ! isset( $content_width ) ) {
			$content_width = 1240;
		}


	}

}

