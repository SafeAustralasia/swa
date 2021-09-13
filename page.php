<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();
?>
<?php
get_template_part('template-parts/content');
get_template_part('template-parts/sidebars/sidebar','right');

get_footer();