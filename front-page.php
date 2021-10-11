<?php
/**
 * Front page template file
 * 
 * @package ASM
 */
//template-parts/header/header","slider"
get_header();
?>
<style>
    .strip-bg {
        background-image: url('<?php echo ASM_ASSETS_URI ?>/images/soloman.jpg');
    }
</style>
<div class="height-30em strip-bg"></div>
<div class="height-30em text-center mt-5">
    <h1>Ways You Can Help</h1>
</div>
<?php
// html pulled from assets/inc/classes/widget-html/text-blocks
//dynamic_sidebar("Home Text Blocks");
get_footer();