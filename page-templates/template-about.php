<?php
/**
 * Template Name: Template - About Page
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

	<!-- Sponsors Section -->
	<section class="container about-page-about-us-section">
		<div class="row">
			<div class="col-md-4 col-lg-3 col-xl-3">
				<h2 class="about-us-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					About Us</h2>
			</div>
			<div class="col-md-8 col-lg-9 col-xl-9">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="about-us-section-content row">
			<div class="col-md-12">
				<?php echo the_content(); ?>
			</div>
		</div>
	</section>

	<!-- Podcasts Section -->
	<section class="container about-page-podcasts-section">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-xl-4">
				<h2 class="podcasts-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Our Podcasts</h2>
			</div>
			<div class="col-md-6 col-lg-8 col-xl-8">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="row podcasts-logos">
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.3s"
				data-wow-duration="0.75s">
				<a href="https://www.americanhardenduro.com/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-1.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.4s"
				data-wow-duration="0.75s">
				<a href="https://www.adventureriderradio.com/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-2.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.5s"
				data-wow-duration="0.75s">
				<a href="https://www.dirtbikechannel.com/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-3.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.6s"
				data-wow-duration="0.75s">
				<a href="https://www.grassrootsenduro.com.au/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-4.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.7s"
				data-wow-duration="0.75s">
				<a href="https://torqueandchatterexperience.podbean.com/" target="_blank"><img
						class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-5.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.8s"
				data-wow-duration="0.75s">
				<a href="https://www.buzzsprout.com/582097/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-6.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="0.9s"
				data-wow-duration="0.75s">
				<a href="https://www,dirtbiketest.com/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-7.svg" /></a>
			</div>
			<div class="col-md-3 single-podcast-logo-container wow bounceIn" data-wow-delay="1s"
				data-wow-duration="0.75s">
				<a href="https://www.thedirtlifeshow.com/" target="_blank"><img class="single-podcast-logo"
						src="<?php echo get_template_directory_uri(); ?>/img/podcast-logo-8.svg" /></a>
			</div>
		</div>
	</section>

    <!-- Race Calendar Section -->
	<section class="container about-page-race-calendar-section">

		<div class="row about-page-race-calendar-section-content">
			
			<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-page-race-calendar-background.svg');"
				class="col-md-8 col-sm-12 left wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.75s">
				<div class="container">
					<div class="row race-calendar-events">
						<div class="col-md-12 race-calendar-events-title-holder">
							<h3 class="race-calendar-events-title">Race Calendar 2021</h3>
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

            <div class="col-md-4 col-sm-12 right">
				<img class="ahec-logo wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.75s"
					src="<?php echo get_template_directory_uri(); ?>/img/ahec-logo-2021.svg" />
			</div>

		</div>
	</section>

	<!-- Sponsors Section (Desktop Section) -->
	<section class="about-page-sponsors-section dont-show-on-mobile container">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-xl-4">
				<h2 class="about-page-sponsors-section-title wow fadeInLeft" data-wow-delay="0.3s"
					data-wow-duration="0.75s">
					Our Sponsors</h2>
			</div>
			<div class="col-md-6 col-lg-8 col-xl-8">
				<!-- Empty Space -->
			</div>
		</div>
		<div class="about-page-sponsors-section-slider row wow backInRight" data-wow-delay="0.5s"
			data-wow-duration="0.75s">
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.3s"
							data-wow-duration="0.75s">
							<a href="https://www.adbmag.com.au/" target="_blank"><img class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-1.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.4s"
							data-wow-duration="0.75s">
							<a href="https://www.bboffroad.com.au" target="_blank"><img class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-2.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.5s"
							data-wow-duration="0.75s">
							<a href="https://www.chadsoffroadsetups.com.au/" target="_blank"><img
									class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-3.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.6s"
							data-wow-duration="0.75s">
							<a href="https://www.globalracingoil.com.au/" target="_blank"><img
									class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-4.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.7s"
							data-wow-duration="0.75s">
							<a href="https://www.goldentyreaustralia.com.au/" target="_blank"><img
									class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-5.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.8s"
							data-wow-duration="0.75s">
							<a href="https://www.zacspeed.com.au/" target="_blank"><img class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-6.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="0.9s"
							data-wow-duration="0.75s">
							<a href="https://www.jimytools.com.au" target="_blank"><img class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-7.svg" /></a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="single-sponsor-logo-container wow bounceIn" data-wow-delay="1s"
							data-wow-duration="0.75s">
							<a href="https://www.sherco.com.au/" target="_blank"><img class="single-sponsor-logo"
									src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logo-8.svg" /></a>
						</div>
					</div>

				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>

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
	</section>

    <!-- Sponsors Section (Mobile Section) -->
	<section class="container about-page-sponsors-section dont-show-on-desktop">
		<div class="row">
			<div class="col-md-3">
				<h2 class="about-page-sponsors-section-title wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="0.75s">
					Our Sponsors</h2>
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



</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
