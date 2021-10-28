<div class="header-page-container overlay-black-400">
	<?php if( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'full' ); ?>
	<?php endif ?>
	<div class="header-container">
		<?php get_template_part('template-parts/nav/nav','main'); ?>    					
		<!-- <div class="container text-container align-items-center"> -->
      	<h1 class="page-heading"><?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?></h1>	
		<!-- </div> -->
	</div>
	<!-- <div class="title-container">
		<h1 class="page-heading"><?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?></h1>	
	</div> -->
	<!-- <div class="header-strip height-10em">
		
	</div> -->
</div>

