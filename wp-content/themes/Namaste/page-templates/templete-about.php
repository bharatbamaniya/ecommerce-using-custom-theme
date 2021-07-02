<?php

/**
 * Template Name: Templete About
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
<div class="wrapper" id="full-width-page-wrapper">

    <header class="single-slider slider-height2 d-flex align-items-center mb-85" data-background="<?php echo get_template_directory_uri(); ?>/img/category.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/category.jpg&quot;);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                            <h2 class="woocommerce-products-header__title page-title"><?php wp_title(''); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="<?php echo esc_attr($container); ?>" id="content">

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
