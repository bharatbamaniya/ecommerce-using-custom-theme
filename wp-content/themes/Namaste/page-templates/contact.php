<?php

/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
	get_template_part('global-templates/hero');
}
?>



<div class="wrapper contact-us-template" id="full-width-page-wrapper">

	<div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg" style="background-image: url(&quot;assets/img/hero/category.jpg&quot;);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap text-center">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="contact-section">
		<div class="container">
			<div class="d-none d-sm-block mb-5 pb-4">
				<!-- // map -->
			</div>
			<div class="row">
				<div class="col-12">
					<h2 class="contact-title">Get in Touch</h2>
				</div>

			</div>
		</div>
	</section>
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
