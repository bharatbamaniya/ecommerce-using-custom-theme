<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="container py-5">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="logo">Namaste</div>
								<div class="d-block mb-3 text-muted desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-12">
								<h5>Quick Links</h5>
								<ul class="list-unstyled">
									<li><a class="link-secondary" href="#">About</a></li>
									<li><a class="link-secondary" href="#">Offers & Discounts</a></li>
									<li><a class="link-secondary" href="#">Get Coupon</a></li>
									<li><a class="link-secondary" href="#">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-12">
								<h5>New Products</h5>
								<ul class="list-unstyled">
									<li><a class="link-secondary" href="#">Women Rings</a></li>
									<li><a class="link-secondary" href="#">Fashion Accessories</a></li>
									<li><a class="link-secondary" href="#">Man Accessories</a></li>
									<li><a class="link-secondary" href="#">Diamond Necklace</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-12">
								<h5>Support</h5>
								<ul class="list-unstyled">
									<li><a class="link-secondary" href="#">Frequently Asked Questions</a></li>
									<li><a class="link-secondary" href="#">Terms & Conditions</a></li>
									<li><a class="link-secondary" href="#">Privacy Policy</a></li>
									<li><a class="link-secondary" href="#">Report a Payment Issue</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="site-info">
						<div class="copyright-text">
							Copyright ©2021 All rights reserved
						</div>
						<div class="social-icon">
							<a href="#" class=""><i class="fa fa-twitter"></i></a>
							<a href="#" class=""><i class="fa fa-facebook"></i></a>
							<a href="#" class=""><i class="fa fa-instagram"></i></a>
							<a href="#" class=""><i class="fa fa-envelope"></i></a>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>