<?php

/**
 * Enqueue Theme Assets.
 *
 * @package ASM
 * 
 * Register Menus
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Menus { 
    use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}
     
	protected function setup_hooks() {   
		/**
		 * Actions.
		 */
		add_action('init', [ $this, 'register_menus' ]);
	}

	public function register_menus() {
		register_nav_menus(
			array(
			  'asm-top-bar-menu' => esc_html__( 'Top Bar Menu','asm' ),
			  'asm-header-menu' => esc_html__( 'Header Menu','asm' ),
			  'asm-footer-menu' => esc_html__( 'Footer Menu','asm' )
			)
		);
	}

	/**
	 * returns menu id
	 * @param $location - location of the menu (header, footer, etc)
	 */
	public function get_menu_id( $location ) {
		// Get all the locations
		$locations = get_nav_menu_locations();

		// Get object id by location
		$menu_id = $locations[ $location ];

		return ! empty ( $menu_id ) ? $menu_id : '';
	}

	/**
	 * returns an array of the child menu items
	 * @param $menu_array - the menu array inclusive of child and parent
	 * @param $parent_id - the id of the parent
	 */
	public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menu = [];

		if( ! empty( $menu_array ) && is_array( $menu_array ) ) {
			foreach( $menu_array as $menu ) {
				if( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menu, $menu );
				}
			}
		}
		return $child_menu;
	}

	public function is_active_page ( $current_page_id ) {
		
		$is_current_page;

		return $is_current_page;
	}

}