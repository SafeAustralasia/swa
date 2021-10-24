<?php
/**
 * Block Patterns
 *
 * @package Aquila
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Block_Patterns {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

	public function register_block_patterns() {

		if ( function_exists( 'register_block_pattern' ) ) {

			/**
			 * Two column content
			 */
			$two_column_content = $this->get_pattern_content( 'template-parts/patterns/test-three-columns' );

			register_block_pattern(
				'asm/test-three-columns',
				[
					'title' => __( 'Test Three Columns', 'asm' ),
					'description' => __( 'Test Three Columns', 'asm' ),
					'categories' => [ 'columns' ],
					'content' => $two_column_content,
				]
			);

			$this->unregister_block_patterns( 'test-columns' );

		}
	}

	public function unregister_block_patterns( $block_pattern ) {

		if ( function_exists( 'unregister_block_pattern' ) ) { 

			unregister_block_pattern( "asm/" . $block_pattern . "" );

		}

	}

	public function get_pattern_content( $template_path ) {

		ob_start();

		get_template_part( $template_path );

		$pattern_content = ob_get_contents();

		ob_end_clean();

		return $pattern_content;
	}

	public function register_block_pattern_categories() {

		$pattern_categories = [
			'cover' => __( 'Cover', 'asm' ),
			'panels' => __( 'Panels', 'asm' ),
			'columns' => __( 'Columns', 'asm' ),
			'card' => __( 'Cards', 'asm' ),
			'buttons' => __( 'Buttons', 'asm' )
		];

		if ( ! empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}


}