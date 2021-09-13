
<?php
/**
 * Content template
 *
 * @package ASM
 */

?>
<div id="primary">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row">        
                <div class="col-8">        
                    <?php the_content() ?>
                </div>
                <div class="col-4">
                    <?php get_template_part('sidebars/sidebar','right'); ?>
                </div>
            </div>
        </div> <!-- end container -->
    </main>
</div>