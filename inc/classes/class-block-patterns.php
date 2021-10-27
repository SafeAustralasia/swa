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
			 * Image / heading and text container
			 */
			$image_text_content = $this->get_pattern_content( 'template-parts/patterns/image_text_container' );

			register_block_pattern(
				'asm/image_text_container',
				[
					'title' => __( 'Image and Text container', 'asm' ),
					'description' => __( 'Image and text container with heading for text', 'asm' ),
					'categories' => [ 'columns' ],
					'content' => $image_text_content,
				]
			);

			//$this->unregister_block_patterns( 'image_text_container' );

			/**
			 * Single paragraph, single column
			 */
			$single_paragraph_single_column = $this->get_pattern_content('template-parts/patterns/paragraph_single_column');

			register_block_pattern(
				'asm/single_paragraph_single_column',
				[
					'title' => __( 'Single Paragraph, Single Column', 'asm' ),
					'description' => __( 'Single paragraph and single column', 'asm' ),
					'categories' => [ 'columns' ],
					'content' => $single_paragraph_single_column,
				]
			);

		}
	}

	public function unregister_block_patterns( $block_pattern ) {

		if ( function_exists( 'unregister_block_pattern' ) ) { 
//
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