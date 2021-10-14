<?php 
/**
 * Header with panels
 * 
 * @package ASM
 */
?>
<?php 
$site_title = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
?>	
<!-- <div class="test">
	<h1>Test</h1>
</div> -->
<div class="header-front-page-container overlay-black-400">
	<!-- <img src="<?php echo ASM_ASSETS_URI ?>/images/banner/Exercise.jpg" alt="woman hat" class="static-header-image"> -->
	<img src="https://swa.asmather.com/wp-content/uploads/2021/09/cyber-security-2765707_1920.jpg" alt="mobile phone" class="static-header-image">
	<div class="header-container content">
		<?php get_template_part('template-parts/nav/nav','main'); ?>    					
		<div class="container text-container">
			<div class="row align-items-center h-100">
				<div class="col-12">
					<div id="h1">Safety</div>
					<div id="h2">Security</div>
					<div id="h3">Preparedness</div>
				</div>
			</div>
		</div>
		<div class="container panel-container">
			<div class="row">
					<div class="col">
						<div class="card" id="card1">
							<div class="img-panel">
								<img src="<?php echo ASM_ASSETS_URI ?>/images/banner/tester.jpg" alt="woman hat" class="card-image">
								<div class="btn-container">
										<?php std_button( "#", "Learn More", 'blue' ); ?>
								</div>
							</div>
							<div class="card-body">
								<h4>Community Safety</h4>
								<p class="card-text">Working with first responder agencies and large, medium and small companies, the SafeAustralasia Foundation facilitate education and an open environment, where leaders and emerging leaders in all sectors can develop their skills and knowledge to protect our community safety.</p>
							</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card" id="card2">
							<div class="img-panel">
								<img src="<?php echo ASM_ASSETS_URI ?>/images/banner/cyber.jpg" alt="woman hat" class="card-image">
								<div class="btn-container">
										<?php std_button( "#", "Learn More", 'blue' ); ?>
								</div>
							</div>
							<div class="card-body">
								<h4>Cyber Security</h4>
								<p class="card-text">Cyber security awareness and safety is vital for all organisations.  In conjunction with our partner organisations and subject experts, we will continue to deliver education and skills in the latest counter measures </p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" id="card3">
							<div class="img-panel">
								<img src="<?php echo ASM_ASSETS_URI ?>/images/banner/hard-hats.jpg" alt="woman hat" class="card-image">
								<div class="btn-container">
									<?php std_button( "#", "Learn More", 'blue' ); ?>
								</div>
							</div>
							<div class="card-body">
								<h4>Disaster Preparedness</h4>
								<p class="card-text">Assisting countries to be ‘ready’ to handle disasters is part of our WorldSafe Institute. In collaboration with other non-profits, we will look at ways to practice drills that can advance resiliency. </p>
							</div>
						</div>
					</div>
			</div>
		</div>
		<div class="btn-container btn-hero-container">
			<?php std_button( "#", "Join Now!", 'hero' ); ?>
		</div>
	</div>
</div>







