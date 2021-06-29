<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

?>
<header class="woocommerce-products-header">
	<div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo get_template_directory_uri(); ?>/img/category.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/category.jpg&quot;);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap text-center">
						<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
							<h2 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h2>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php


	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>
<?php
do_action('woocommerce_before_main_content');
if (woocommerce_product_loop()) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
?>
	<div class="row">
		<div class="col-md-4">

			<div class="product_sidebar">
				<div class="single_sedebar">
					<form action="#">
						<input type="text" name="#" placeholder="Search keyword">
						<i class="fa fa-search"></i>
					</form>
				</div>
				<div class="single_sedebar">
					<div class="select_option">
						<div class="select_option_list">Category <i class="right fa-caret-down fas"></i> </div>
						<div class="select_option_dropdown" style="display: none;">
							<p><a href="#">Category 1</a></p>
							<p><a href="#">Category 2</a></p>
							<p><a href="#">Category 3</a></p>
							<p><a href="#">Category 4</a></p>
						</div>
					</div>
				</div>
				<div class="single_sedebar">
					<div class="select_option">
						<div class="select_option_list">Type <i class="right fa-caret-down fas"></i> </div>
						<div class="select_option_dropdown" style="display: none;">
							<p><a href="#">Type 1</a></p>
							<p><a href="#">Type 2</a></p>
							<p><a href="#">Type 3</a></p>
							<p><a href="#">Type 4</a></p>
						</div>
					</div>
				</div>
				<?php do_action('woocommerce_before_shop_loop'); ?>
			</div>
		</div>
		<div class="col-md-8">
			<div class="product_list">

				<?php
				woocommerce_product_loop_start();

				if (wc_get_loop_prop('total')) {
				?>
					<div class="row">
						<?php
						while (have_posts()) {
							the_post();

							$average_rating = $product->get_average_rating();
							$price = get_post_meta(get_the_ID(), '_regular_price', true);
							// $price will return regular price
							$sale = get_post_meta(get_the_ID(), '_sale_price', true);
							// $sale will return sale price
						?>



							<div class="col-lg-6 col-sm-6">
								<div class="single_product_item text-center">
									<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo $image[0]; ?>" alt="" class="img-fluid shop-page-item-image">
									</a>
									<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
									<div class="price">
										<ul>
											<li>Rs. <?php echo $sale ?>/-</li>
											<li class="discount">Rs. <?php echo $price ?>/-</li>
										</ul>
									</div>
								</div>
							</div>
						<?php
							/**
							 * Hook: woocommerce_shop_loop.
							 */
							// do_action('woocommerce_shop_loop');

							// wc_get_template_part('content', 'product');
						}
						?>
					</div>
				<?php
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action('woocommerce_after_shop_loop');

				?>


				<!-- <div class="col-lg-6 col-sm-6">
						<div class="single_product_item">
							<img src="assets/img/categori/xproduct2.png.pagespeed.ic.eUEI6NamxP.webp" alt="" class="img-fluid">
							<h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
							<p>From $5</p>
						</div>
					</div> -->


				<div class="load_more_btn text-center">
					<a href="#" class="btn_3">Load More</a>
				</div>
			</div>
		</div>
	</div>
<?php
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
