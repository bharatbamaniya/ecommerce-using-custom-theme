<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
get_header('shop'); ?>
<div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo get_template_directory_uri(); ?>/img/category.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/category.jpg&quot;);">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="hero-cap text-center">
					<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
						<h2 class="woocommerce-products-header__title page-title">Product Details</h2>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<?php while (have_posts()) : ?>
	<?php the_post(); ?>

	<?php wc_get_template_part('content', 'single-product'); ?>

<?php endwhile; // end of the loop. 
?>

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
