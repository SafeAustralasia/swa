<?php

/**
 * Clock Widget
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;
use WP_Widget;

class Clock_Widget extends WP_Widget {
    use Singleton;
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'clock_widget', // Base ID
            'Clock', // Name
            [ 'description' => __( 'Clock Widget', 'asm' ), ] // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        echo $after_widget;
    }

    	/**
	 * Set defaults on an instance object
	 * 
	 * @param object $instance The instance object to scan/modify
	 */
	public function instanceDefaults($instance) {
        $instance['title'] = !empty( $instance['title'] ) ? $instance['title'] : 'Title';
		$instance['details'] = !empty( $instance['details'] ) ? $instance['details'] : 'Details...';		
		$instance['linktext'] = !empty( $instance['linktext'] ) ? $instance['linktext'] : 'Read more';
		// $instance['linkuri'] = !empty( $instance['linkuri'] ) ? $instance['linkuri'] : '/';
		// $instance['imageuri'] = !empty( $instance['imageuri'] ) ? $instance['imageuri'] : get_template_directory_uri() . "/img/" . "placeholder.svg";
		return $instance;
	}
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New clock', 'asm' );
        }
        $instance = $this->instanceDefaults($instance);
		include('widget-html/clock/clock-form.php');
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
} // class clock_Widget