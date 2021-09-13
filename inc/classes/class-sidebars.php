<?php

/**
 * Register Sidebars.
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Sidebars  {
    use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}
     
	protected function setup_hooks() {
		/**
		 * Actions.
		 */
        add_action( 'widgets_init', [ $this, 'register_sidebars'] );
        add_action( 'widgets_init', [ $this, 'register_clock_widget'] );

	}
    
    public function register_sidebars() {

        register_sidebar( array(
            'name'          => __( 'Sidebar Home', 'asm' ),
            'id'            => 'sidebar-home',
            'description'   => __( 'Home sidebar', 'asm'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Sidebar Right', 'asm' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Right sidebar', 'asm'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Sidebar', 'asm' ),
            'id'            => 'sidebar-footer',
            'description'   => __( 'Footer sidebar', 'asm'),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }

    public function register_clock_widget() {
        register_widget( 'ASM_THEME\Inc\Clock_Widget' );
    }

}