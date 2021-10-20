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

$img[0] = 'iphone.jpg';
$img[1] = 'industrial.jpg';
$img[2] = 'fire.jpg';
$img[3] = 'WorldSafe.jpg';
$img[4] = 'security-lock.jpg';
?>	
<div class="header-front-page-container overlay-black-400">
	<!-- <img src="<?php echo ASM_BUILD_URI ?>/images/banner/Exercise.jpg" alt="woman hat" class="static-header-image"> -->
	<img src="<?php echo ASM_BUILD_URI ?>/img/<?php echo $img[rand(0,count($img) - 1)]; ?>" alt="mobile phone" class="static-header-image">
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
			<div class="row slider-container">

				<div class="col">
					<div class="card" id="card1">
						<div class="img-panel">
							<img src="<?php echo ASM_BUILD_URI ?>/img/tester.jpg" alt="woman hat" class="card-image">
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
							<img src="<?php echo ASM_BUILD_URI ?>/img/cyber.jpg" alt="woman hat" class="card-image">
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
							<img src="<?php echo ASM_BUILD_URI ?>/img/exercise 800.jpg" alt="woman hat" class="card-image">
							<div class="btn-container">
								<?php std_button( "#", "Learn More", 'blue' ); ?>
							</div>
						</div>
						<div class="card-body">
							<h4>Disaster Preparedness</h4>
							<p class="card-text">With the potential for natural hazard disasters and large scale emergencies ever present in our region, we aim to provide education in disaster preparedness and resilience for businesses and the wider community. </p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="btn-container btn-hero-container">
			<?php std_button( "" . get_site_url() . "/membership", "Join Now!", 'hero' ); ?>
		</div>
	</div>
</div>







