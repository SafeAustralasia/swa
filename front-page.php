<?php
/**
 * Front page template file
 * 
 * @package ASM
 */

get_header();
// html pulled from assets/inc/classes/widget-html/text-blocks
dynamic_sidebar("Home Text Blocks");
get_footer();