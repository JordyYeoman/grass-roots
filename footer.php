<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/footer-background.svg);"
	class="wrapper main-footer" id="wrapper-footer">

	<div class="container">
		<div class="row footer-content">
			<div class="col-md-4 col-xs-12 left">
				<img class="footer-logo wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.75s" src="<?php echo get_template_directory_uri(); ?>/img/ahec-logo-2021.svg"
					height="220" width="220" />
			</div>
			<div class="col-md-4 col-xs-12 middle">
				<h4 class="footer-header wow fadeInDown" data-wow-delay="0.65s" data-wow-duration="0.75s">Quick Links</h4>
				<ul>
					<li class="wow bounceIn" data-wow-delay="0.75s" data-wow-duration="0.75s"><a href="/">Home</a></li>
					<li class="wow bounceIn" data-wow-delay="0.8s" data-wow-duration="0.75s"><a href="/shop">Shop</a></li>
					<li class="wow bounceIn" data-wow-delay="0.85s" data-wow-duration="0.75s"><a href="/championship">Championship</a></li>
					<li class="wow bounceIn" data-wow-delay="0.9s" data-wow-duration="0.75s"><a href="/rider-training">Rider Training</a></li>
					<li class="wow bounceIn" data-wow-delay="0.95s" data-wow-duration="0.75s"><a href="/media">Media</a></li>
					<li class="wow bounceIn" data-wow-delay="1s" data-wow-duration="0.75s"><a href="/sponsors">Sponsors</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-xs-12 right">
				<h4 class="footer-header wow fadeInDown" data-wow-delay="0.75s" data-wow-duration="0.75s">Contact Us</h4>
				<ul>
					<li class="wow bounceIn" data-wow-delay="1s" data-wow-duration="1.2s"><a href="tel:0414864793"><i class="fa fa-phone" aria-hidden="true"></i> 0414 864 793</a></li>
					<li class="wow bounceIn" data-wow-delay="1s" data-wow-duration="1.15s"><a href="mailto:info@grassrootsenduro.com.au"><i class="fa fa-envelope" aria-hidden="true"></i>
							info@grassrootsenduro.com.au</a></li>
				</ul>
				<div class="footer-social-links">
					<a class="wow bounceIn" data-wow-delay="1s" data-wow-duration="1.1s" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class="wow bounceIn" data-wow-delay="1s" data-wow-duration="1.05s" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>

</footer><!-- main footer end -->

<footer class="copyright-footer">
	<div class="container">
		<div class="copyright-footer-content row">
			<div class="col-md-6 col-xs-12 left wow fadeInLeft" data-wow-delay="1s" data-wow-duration="0.75s">
				Grassroots Enduro Australia | Copyright © 2021
			</div>
			<div class="col-md-6 col-xs-12 right wow fadeInRight" data-wow-delay="1.1s" data-wow-duration="0.75s">
				Web design by <a href="https://www.limitlessdevs.com.au" target="_blank">Limitless Devs</a>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
