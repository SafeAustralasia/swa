<?php
/**
 * Front page template file
 * 
 * @package ASM
 */

get_header();
?>
<div class="container page-main">
    <div class="row">        
        <?php dynamic_sidebar("Home Text Blocks") ?>
    </div>
</div> <!-- end container -->
<?php
get_footer();