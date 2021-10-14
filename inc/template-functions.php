<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ASM
 */
if ( ! function_exists( 'std_button' ) ) :
	/**
	 * Outputs a standard button
	 * @param $btn_href - hyper link
	 * @param $btn_text - button text
	 * @param $btn-color - button type, primary or secondary
	 */
	function std_button( $btn_href, $btn_text, $btn_color = "blue" ) {
		?>
			<button class="learn-more btn-<?php echo $btn_color ?>" onclick="location.href='<?php echo esc_html( $btn_href ); ?>'">
			<span class="square" aria-hidden="true">
				<span class="icon arrow"></span>
			</span>
			<span class="button-text"><?php echo $btn_text; ?></span>
			</button>
		<?php
	}

endif;

if ( ! function_exists( 'dump' ) ) :
	/**
	 * debug function outputs php array / object in readable form instead of on one line
	 * @param $arg, array or object
	 */
	function dump( $arg ) {
		echo '<pre>';
		var_dump( $arg );
		echo '</pre>';
	}

endif;
add_action( "after_theme_setup","dump" );
