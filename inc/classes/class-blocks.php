<?php
/**
 * Blocks
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Blocks {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_filter( 'block_categories', [ $this, 'add_block_categories' ] );
	}

	/**
	 * Add a block category
	 *
	 * @param array $categories Block categories.
	 *
	 * @return array
	 */
	public function add_block_categories( $categories ) {

		$category_slugs = wp_list_pluck( $categories, 'slug' );

		return in_array( 'asm', $category_slugs, true ) ? $categories : array_merge(
			$categories,
			[
				[
					'slug'  => 'asm',
					'title' => __( 'ASM Blocks', 'asm' ),
					'icon'  => 'table-row-after',
				],
			]
		);

	}

}