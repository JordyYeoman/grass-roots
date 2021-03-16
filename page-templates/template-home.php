<?php
/**
 * Template Name: Template - Home
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

<div class="wrapper home-page-content" id="full-width-page-wrapper">

	<!-- Sponsors Section -->
	<section class="container home-page-sponsors-section">
		<div class="row">
			<div class="col-md-3">
				<h2 class="sponsors-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Sponsors</h2>
			</div>
			<div class="col-md-9">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="row sponsors-logos">
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.3s"
				data-wow-duration="0.75s">
				<a href="https://www.adbmag.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-1.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.4s"
				data-wow-duration="0.75s">
				<a href="https://www.bboffroad.com.au" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-2.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.5s"
				data-wow-duration="0.75s">
				<a href="https://www.chadsoffroadsetups.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-3.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.6s"
				data-wow-duration="0.75s">
				<a href="https://www.globalracingoil.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-4.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.7s"
				data-wow-duration="0.75s">
				<a href="https://www.goldentyreaustralia.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-5.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.8s"
				data-wow-duration="0.75s">
				<a href="https://www.zacspeed.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-6.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="0.9s"
				data-wow-duration="0.75s">
				<a href="https://www.jimytools.com.au" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-7.svg" /></a>
			</div>
			<div class="col-md-3 single-sponsor-logo-container wow bounceIn" data-wow-delay="1s"
				data-wow-duration="0.75s">
				<a href="https://www.sherco.com.au/" target="_blank"><img class="single-sponsor-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-8.svg" /></a>
			</div>
		</div>
	</section>

	<!-- Race Calendar Section -->
	<section class="container home-page-race-calendar-section">
		<div class="row">
			<div class="col-md-5">
				<h2 class="race-calendar-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Race Calendar 2021</h2>
			</div>
			<div class="col-md-7">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="row home-page-race-calendar-section-content">
			<div class="col-md-4 col-sm-12 left">
				<img class="ahec-logo wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.75s"
					src="<?php echo get_template_directory_uri(); ?>/img/ahec-logo-2021.svg" />
			</div>
			<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-page-race-calendar-section-background.jpg');"
				class="col-md-8 col-sm-12 right wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.75s">
				<div class="container">
					<div class="row race-calendar-events">
						<div class="col-md-12 race-calendar-events-title-holder">
							<h3 class="race-calendar-events-title">Australian Hard Enduro Championship</h3>
							<img class="race-calendar-events-title-bottom-border" width="559" height="2"
								src="<?php echo get_template_directory_uri(); ?>/img/race-calendar-events-title-bottom-border.svg" />
						</div>

						<?php

                            $loop = new WP_Query( array(
                            'post_type' => 'events',  
                            'posts_per_page' => -1,
                            'order'   => 'DESC',
                            ));

                            while ( $loop->have_posts() ) : $loop->the_post();

							$event_start_date = get_field( 'event_start_date' );
							$formatted_start_date = date("M j", strtotime($event_start_date));

							$event_end_date = get_field( 'event_end_date' );
							$formatted_end_date = date("j", strtotime($event_end_date));

							$event_location = get_field('event_location');
							

                        ?>
						<div class="col-md-6 col-sm-12 race-calendar-single-event-container">
							<div class="race-calendar-single-event">
								<h5 class="race-calendar-single-event-title"><?php echo the_title(); ?></h5>
								<h5 class="race-calendar-single-event-date"><?php echo $formatted_start_date; ?> &
									<?php echo $formatted_end_date; ?></h5>
								<h5 class="race-calendar-single-event-location"><?php echo $event_location; ?></h5>
							</div>
						</div>
						<?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Products Section -->
	<section class="home-page-products-section">
		<div class="home-page-products-section-container container">
			<div class="home-page-products-section-title-holder row">
				<div class="col-md-6 col-xs-12">
					<h2 class="home-page-products-section-title wow fadeInLeft" data-wow-delay="0.3s"
						data-wow-duration="0.75s">Our Products</h2>
				</div>
				<div class="col-md-6 dont-show-on-mobile">
					<a class="view-more-products-link wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.75s"
						href="/shop">View More</a>
				</div>
			</div>
			<div class="home-page-products-section-products-holder row">

				<div class="home-page-single-product-holder col-md-3">
					<div class="home-page-single-product wow fadeIn" data-wow-delay="0.7s" data-wow-duration="0.75s">
						<div class="home-page-single-product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/helmet-product.png" />
						</div>
						<div class="home-page-single-product-description">
							<div class="home-page-single-product-title-holder">
								<h3 class="home-page-single-product-title">Goggles</h3>
							</div>
							<div class="home-page-single-product-quantity-holder">
								<p class="home-page-single-product-quantity">22 In Stock</p>
							</div>
						</div>
					</div>
				</div>

				<div class="home-page-single-product-holder col-md-3">
					<div class="home-page-single-product wow fadeIn" data-wow-delay="0.8s" data-wow-duration="0.75s">
						<div class="home-page-single-product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/helmet-product.png" />
						</div>
						<div class="home-page-single-product-description">
							<div class="home-page-single-product-title-holder">
								<h3 class="home-page-single-product-title">Goggles</h3>
							</div>
							<div class="home-page-single-product-quantity-holder">
								<p class="home-page-single-product-quantity">22 In Stock</p>
							</div>
						</div>
					</div>
				</div>

				<div class="home-page-single-product-holder col-md-3">
					<div class="home-page-single-product wow fadeIn" data-wow-delay="0.9s" data-wow-duration="0.75s">
						<div class="home-page-single-product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/helmet-product.png" />
						</div>
						<div class="home-page-single-product-description">
							<div class="home-page-single-product-title-holder">
								<h3 class="home-page-single-product-title">Goggles</h3>
							</div>
							<div class="home-page-single-product-quantity-holder">
								<p class="home-page-single-product-quantity">22 In Stock</p>
							</div>
						</div>
					</div>
				</div>

				<div class="home-page-single-product-holder col-md-3">
					<div class="home-page-single-product wow fadeIn" data-wow-delay="1s" data-wow-duration="0.75s">
						<div class="home-page-single-product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/img/helmet-product.png" />
						</div>
						<div class="home-page-single-product-description">
							<div class="home-page-single-product-title-holder">
								<h3 class="home-page-single-product-title">Goggles</h3>
							</div>
							<div class="home-page-single-product-quantity-holder">
								<p class="home-page-single-product-quantity">22 In Stock</p>
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="col-xs-12 dont-show-on-desktop">
				<a class="view-more-products-link mobile wow fadeInRight" data-wow-delay="0.5s"
					data-wow-duration="0.75s" href="/shop">View More</a>
			</div>
		</div>
	</section>

	<!-- Images Section -->
	<section class="home-page-images-section container">
		<div class="row">
			<div class="col-md-2">
				<h2 class="home-page-images-section-title wow fadeInLeft" data-wow-delay="0.3s"
					data-wow-duration="0.75s">Images</h2>
			</div>
			<div class="col-md-10">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="home-page-images-slider row">
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="single-image-container wow slideInLeft" data-wow-delay="0.5s"
							data-wow-duration="0.75s"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-1-slider-nb.jpg" />
					</div>

					<div class="swiper-slide">
						<div class="single-image-container wow slideInUp" data-wow-delay="0.5s"
							data-wow-duration="0.75s"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-1-slider-nb.jpg" />
					</div>

					<div class="swiper-slide">
						<div class="single-image-container wow slideInRight" data-wow-delay="0.5s"
							data-wow-duration="0.75s"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-1-slider-nb.jpg" />
					</div>

					<div class="swiper-slide">
						<div class="single-image-container"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-image-1-slider-nb.jpg" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-images-container', {
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
			},
			pagination: {
				el: '.swiper-pagination',
			},
		});

	</script>

	<!-- Videos Section -->
	<section class="home-page-videos-section">
		<div class="home-page-videos-section-container container">
			<div class="home-page-videos-section-title-holder row">
				<div class="col-md-2">
					<h2 class="home-page-videos-section-title wow fadeInLeft" data-wow-delay="0.3s"
						data-wow-duration="0.75s">Videos</h2>
				</div>
				<div class="col-md-10">
					<!-- Empty Space -->
				</div>
			</div>
			<div class="home-page-videos-section-videos row">
				<div class="col-md-4 videos-holder-left-side wow zoomIn" data-wow-delay="0.5s"
					data-wow-duration="0.75s">
					<iframe width="100%" height="582" src="https://www.youtube.com/embed/xcqyUnslCZU" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
				<div class="col-md-8">
					<div class="videos-holder-right-side row">
						<div class="col-md-6 wow zoomIn" data-wow-delay="0.6s" data-wow-duration="0.75s">
							<iframe width="100%" height="291" src="https://www.youtube.com/embed/wsZyQvqZYdA"
								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
						<div class="col-md-6 wow zoomIn" data-wow-delay="0.7s" data-wow-duration="0.75s">
							<iframe width="100%" height="291" src="https://www.youtube.com/embed/wsZyQvqZYdA"
								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
						<div class="col-md-6 wow zoomIn" data-wow-delay="0.8s" data-wow-duration="0.75s">
							<iframe width="100%" height="291" src="https://www.youtube.com/embed/wsZyQvqZYdA"
								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
						<div class="col-md-6 wow zoomIn" data-wow-delay="0.9s" data-wow-duration="0.75s">
							<iframe width="100%" height="291" src="https://www.youtube.com/embed/wsZyQvqZYdA"
								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- News Section (Desktop Section) -->
	<section class="home-page-news-section dont-show-on-mobile container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="home-page-news-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Latest News</h2>
			</div>
			<div class="col-md-6">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="home-page-news-section-slider row wow backInRight" data-wow-delay="0.5s" data-wow-duration="0.75s">
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<?php

                     $loop = new WP_Query( array(
					 'post_type' => 'post', 
					 'post_category' => 'news',
                     'posts_per_page' => -1,
                     'order'   => 'DESC',
                     ));
                     while ( $loop->have_posts() ) : $loop->the_post();

                ?>
					<div class="swiper-slide">
						<div class="home-page-news-section-single-news-item">
							<div style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"
								class="single-news-thumbnail">

							</div>
							<h4 class="single-news-title"><?php echo the_title(); ?></h4>
							<div class="single-news-info"><?php echo the_excerpt(); ?></div>
						</div>
					</div>

					<?php endwhile; wp_reset_query(); ?>


				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>

	</section>

	<!-- News Section (Mobile Section) -->
	<section class="home-page-news-section dont-show-on-desktop container">
		<div class="row">
			<div class="col-md-4">
				<h2 class="home-page-news-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Latest News</h2>
			</div>
			<div class="col-md-8">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="row">

			<?php

                     $loop = new WP_Query( array(
					 'post_type' => 'post', 
					 'post_category' => 'news',
                     'posts_per_page' => 3,
                     'order'   => 'DESC',
                     ));
                     while ( $loop->have_posts() ) : $loop->the_post();

                ?>

				<div class="col-sm-12 home-page-news-section-single-news-item">
					<div style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); height: 350px;"
						class="single-news-thumbnail">
					</div>
					<h4 class="single-news-title"><?php echo the_title(); ?></h4>
					<div class="single-news-info"><?php echo the_excerpt(); ?></div>
				</div>


			<?php endwhile; wp_reset_query(); ?>
		</div>
	</section>


	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 3,
			spaceBetween: 30,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

	</script>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
