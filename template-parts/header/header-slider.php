<?php 
/**
 * Slick Carousel
 * 
 * @package ASM
 */

$slider_content = [
	[
		[
			"img-name" => "Exercise.jpg",
			"main-title" => "Title One",
			"paragraph" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos nemo sed natus velit veritatis sequi",
			"button-title" => "Click Here",
			"button-href" => '/some-url'
		]
	],
	[
		[
			"img-name" => "inspection.jpg",
			"main-title" => "Title Two",
			"paragraph" => "deserunt sunt laboriosam iste. Inventore minima est vero omnis?",
			"button-title" => "Click Here",
			"button-href" => '/some-url'
		]
	]
];
?>
<div class="front-page-slider">
<?php
foreach($slider_content as $slider_index => $content_array) {
	foreach($content_array as $content_index => $item) {
		?>
		<div class="header-image-container height-40em overlay-black-400">
			<img src="<?php echo ASM_ASSETS_URI ?>/images/banner/<?php echo $item["img-name"]; ?>" alt="<?php echo $item["img-name"]; ?>" class="static-image">
			<div class="header-text">
				<h1><?php echo $item["main-title"]; ?></h1>
				<p><?php echo $item["paragraph"]; ?></p>
			</div>
		</div>
		<?php
	}
}
?>

</div>

