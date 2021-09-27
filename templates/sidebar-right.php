<?php 
/* Template Name:Sidebar Right Layout */
get_header();
?>
<div class="container page-main">
    <div class="row">
        <div class="col-lg-9 mr-4">
            <?php the_content() ?>
        </div>
        <div class="col-lg-3">
            <?php
            get_template_part('template-parts/sidebars/sidebar','right');
            ?>
        </div>
    </div>
</div>
<?php
get_footer();

