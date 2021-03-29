<?php
/**
 * Template Name: Template - Shop Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">
<div class="container">
<div class="row flex-column" style="margin-left: 0; margin-right: 0;">
		<div class="col">
				<h2 class="related-products-title">
					All Products
				</h2>	
				<div class="related-products-container">
				<?php
					$loop = new WP_Query( array(
					'post_type' => 'products',
					'meta_key'		=> 'product_category',
					// 'meta_value'	=> $product_category,
					'posts_per_page' => -1,
					'orderby'   => 'rand',
					'order' => 'ASC'
					));
					while ( $loop->have_posts() ) : $loop->the_post();

					$product_price = get_field('product_price');
					$product_quantity = get_field('product_quantity');
				?>
						<div class="related-product wow fadeInUp">
							<a href="<?php echo the_permalink(); ?>">
								<div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
								<div class="content">
									<h4><?php echo the_title() ?></h4>
									<!-- <div class="description-info">
										<p>Ave Quantity</p>
										<p>
										<?php 
											if($product_quantity > 1) {
												echo "($product_quantity)";
											}
											else {
												echo '(5)';
											}
										?>
										</p>
									</div>
									<div class="description-info">
										<p>Price:</p>
										<p>$<?php echo $product_price ?></p>
									</div> -->
								</div>
							</a>
							<div class="buy-now-button">
								<a href="#">
									Buy Now
								</a>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
		</div>
	</div>
	
	<div class="row flex-column" style="margin-left: 0; margin-right: 0;">
		<div class="col">
			<div class="shop-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/dirtbikes.png')"></div>
			<div class="shop-main-content">
				<h2>Register Yourself</h2>
				<h4>2021 Championship</h4>
				<div class="links">
					<div>Supplementary Regulation</div>
					<div>A.M.A Membership</div>
					<div>Registered Race Number</div>
					<div>A.H.E.C Point System</div>
				</div>
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
					'posts_per_page' => 4,
					'orderby'   => 'rand',
					'order' => 'ASC'
					));
					while ( $loop->have_posts() ) : $loop->the_post();

					$product_price = get_field('product_price');
					$product_quantity = get_field('product_quantity');
				?>
						<div class="related-product wow fadeInUp">
							<a href="<?php echo the_permalink(); ?>">
								<div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
								<div class="content">
									<h4><?php echo the_title() ?></h4>
									<div class="description-info">
										<p>Ave Quantity</p>
										<p>
										<?php 
											if($product_quantity > 1) {
												echo "($product_quantity)";
											}
											else {
												echo '(5)';
											}
										?>
										</p>
									</div>
									<div class="description-info">
										<p>Price:</p>
										<p>$<?php echo $product_price ?></p>
									</div>
								</div>
							</a>
							<div class="buy-now-button">
								<a href="#">
									Buy Now
								</a>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
				</div>
		</div>
	</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
