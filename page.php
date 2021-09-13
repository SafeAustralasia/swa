<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();
?>
<div class="container page-main">
    <div class="row">        
        <?php the_content() ?>
    </div>
</div> <!-- end container -->
<?php
get_footer();