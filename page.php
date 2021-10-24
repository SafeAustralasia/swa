<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();
?>
<main id="main" class="page-main" role="main">
  <div class="container">
    <div class="row">
      <?php the_content() ?>
    </div>
  </div> <!-- end container -->
  
  <!-- <div class="container hwh-container">
    <div class="row">
      <div class="col-md-4">
        <img class="alignnone size-medium wp-image-242" src="http://localhost/wp/swa/wp-content/uploads/2021/10/hands-world-25-300x213.jpg" alt="" width="300" height="213">
      </div>
      <div class="col-md-8">
        <h2>Community Safety</h2>
        <p>This is the text block area</p>
      </div>
    </div>
  </div> -->
</main>
<?php
get_footer();