<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();
?>
<main id="main" class="page-main" role="main">
  <div class="container page-container">
    <div class="row">
      <?php the_content() ?>
    </div>
  </div> <!-- end container -->
</main>


<?php
get_footer();