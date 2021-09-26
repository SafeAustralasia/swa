<?php 
$site_title = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
?>
<div class="static-image-container overlay-black-400 height-40em">
  <img src="<?php echo ASM_ASSETS_URI ?>/images/banner/Exercise.jpg" alt="woman hat" class="static-image">
  <div class="header-text">
    <h1><?php echo $site_title; ?></h1>
    <p><?php echo $site_description ?></p>
  </div>
</div>