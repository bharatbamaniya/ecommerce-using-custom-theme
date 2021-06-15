<?php

/**
 * Template Name: Templete HomePage
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
    <div class="row">
        <main class="site-main" id="main" role="main">


        </main><!-- #main -->
    </div><!-- .row end -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
