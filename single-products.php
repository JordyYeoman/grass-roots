<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$product_title = get_the_title();
$product_description = get_the_content();
$product_category = get_field('product_category');
$product_image = get_the_post_thumbnail_url();
$product_image_2 = get_field('product_image_2');
$product_image_3 = get_field('product_image_3');
$product_image_4 = get_field('product_image_4');
$product_image_5 = get_field('product_image_5');
$product_price = get_field('product_price');
$product_subtitle = get_field('product_subtitle');

if ($product_available) {
	$product_link = get_field('product_link');
} else {
	$product_link = false;
}

$product_available = get_field('product_available');
$product_description_short = get_field('product_description_short');
?>

<div class="wrapper single-product" id="single-wrapper">

	<div class="container">
	<div class="col">
		<h2><?php echo $product_title; ?></h2>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<div class="col">
				<div class="product-feature-img" style="background-image:url('<?php echo $product_image; ?>')"></div>
			</div>
			<div class="col image-gallery">
				<?php if($product_image_2){
					?> 
					<div class="product-image-gallery-item" style="background-image:url(<?php echo $product_image_2 ?>)"></div>
				<?php 
				} else {
					echo 'no img';
				}
				?>
				<?php if($product_image_3){
					?> 
					<div class="product-image-gallery-item" style="background-image:url(<?php echo $product_image_3 ?>)"></div>
				<?php 
				} else {
					echo 'no img';
				}
				?>
				<?php if($product_image_4){
					?> 
					<div class="product-image-gallery-item" style="background-image:url(<?php echo $product_image_4 ?>)"></div>
				<?php 
				} else {
					echo 'no img';
				}
				?>
				<?php if($product_image_5){
					?> 
					<div class="product-image-gallery-item" style="background-image:url(<?php echo $product_image_5 ?>)"></div>
				<?php 
				} else {
					echo 'no img';
				}
				?>
			</div>
		</div>
		<div class="col-md-6">
			<h3><?php echo $product_subtitle; ?></h3>
			<div class="short-description">
				<p><?php echo $product_description_short; ?></p>
			</div>
			<div>
				<?php if($product_link) {
						echo "<div class='shop-link-button'>
								<a href=''>
									Product link available
								</a>
							</div>";	
					} 

					// Product not yet available
					else {
						echo "<div class='shop-link-button'>
								<a href=''>
									Coming Soon
								</a>
							</div>";	
					}
				?>
			</div>
		</div>
	</div>
	
	<div class="row flex-column" style="margin-left: 0; margin-right: 0;">
		<div class="col">
			<div class="tabs-container">
				<div class="tab-item active">Description</div>
				<div class="tab-item">Review</div>
				<div class="tab-item">Delivery Details</div>
			</div>
		</div>
		<div class="col">
			<div class="product-info">
				<?php echo $product_description ?>
			</div>
		</div>
	</div>
	
	<div class="row flex-column" style="margin-left: 0; margin-right: 0;">
		<div class="col">
				<h2 class="related-products-title">
					Related Products
				</h2>	
				<div class="related-products-container">
				<?php
					$loop = new WP_Query( array(
					'post_type' => 'products',
					'meta_key'		=> 'product_category',
					'meta_value'	=> $product_category,
					'posts_per_page' => 10,
					'orderby'   => 'rand',
					'order' => 'ASC'
					));
					while ( $loop->have_posts() ) : $loop->the_post();

				?>
						<div class="related-product wow fadeInUp">
							<a href="<?php echo the_permalink(); ?>">
								<div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
								<h4><?php echo the_title() ?></h4>
								Description
							</a>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
		</div>
	</div>

</div><!-- #single-wrapper -->

<?php
get_footer();
