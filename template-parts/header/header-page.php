<div class="header-page-container overlay-black-400">
	<img src="<?php echo ASM_ASSETS_URI ?>/images/banner/Exercise.jpg" alt="woman hat" class="static-header-image">
	<div class="header-container">
		<?php get_template_part('template-parts/nav/nav','main'); ?>    					
		<!-- <div class="container text-container align-items-center"> -->
      <h1><?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?></h1>	
		<!-- </div> -->
	</div>
	<!-- <div class="header-strip height-10em">
		
	</div> -->
</div>

