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

<div class="wrapper home-page-wrapper" id="full-width-page-wrapper">
    <div class="home-banner">
        <div class="row">
            <main class="site-main" id="main" role="main">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-md-block">
                            <div class="hero-img" data-animation="bounceIn" data-delay=".4s" style="animation-delay: 0.4s;">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero.webp" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6">
                            <div class="hero-caption">
                                <span data-animation="fadeInRight" data-delay=".4s" class="" style="animation-delay: 0.4s;">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s" class="" style="animation-delay: 0.6s;">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s" class="" style="animation-delay: 0.8s;">Best Cloth Collection By 2020!</p>

                                <div class="hero-btn" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                    <a href="#" class="bttn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- .row end -->
    </div>
    <!-- <?php echo get_template_directory_uri(); ?>/img -->
    <section class="category-area section-padding30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-85">
                        <h2>Shop by Category</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/xcat1.jpg.pagespeed.ic.fHyE_8RHVV.webp" alt="" data-pagespeed-url-hash="772607519" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="category-caption">
                                <h2>Owmen`s</h2>
                                <span class="best"><a href="#">Best New Deals</a></span>
                                <span class="collection">New Collection</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/xcat2.jpg.pagespeed.ic.Y9XV67bWs0.webp" alt="" data-pagespeed-url-hash="1067107440" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="category-caption">
                                <span class="collection">Discount!</span>
                                <h2>Winter Cloth</h2>
                                <p>New Collection</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/xcat3.jpg.pagespeed.ic.2LQT-LNfhJ.webp" alt="" data-pagespeed-url-hash="1361607361" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="category-caption">
                                <h2>Man`s Cloth</h2>
                                <span class="best"><a href="#">Best New Deals</a></span>
                                <span class="collection">New Collection</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-product-area padding-bottom">
        <div class="container">
            <div class="row product-btn d-flex justify-content-end align-items-end">

                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="section-tittle mb-30 heading-center">
                        <h2>Latest Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">

                        <?php

                        $args = array(
                            'post_type' => 'product',
                            'orderby' => 'rand',
                            // 'order' => 'ASC',
                            // 'product_cat' => 'bin',
                            'posts_per_page' => 8,
                        );
                        $index = 0;
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $index++;

                            $average_rating = $product->get_average_rating();
                            $price = get_post_meta(get_the_ID(), '_regular_price', true);
                            // $price will return regular price
                            $sale = get_post_meta(get_the_ID(), '_sale_price', true);
                            // $sale will return sale price

                        ?>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </a>

                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <?php
                                            printrating($average_rating);
                                            ?>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="price">

                                            <ul>
                                                <li>Rs. <?php echo $sale ?>/-</li>
                                                <li class="discount">Rs. <?php echo $price ?>/-</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <?php

                        $args = array(
                            'post_type' => 'product',
                            'orderby' => 'post_date',
                            'order' => 'ASC',
                            // 'product_cat' => 'bin',
                            'posts_per_page' => 8,
                        );
                        $index = 0;
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $index++;

                            $average_rating = $product->get_average_rating();
                            $price = get_post_meta(get_the_ID(), '_regular_price', true);
                            // $price will return regular price
                            $sale = get_post_meta(get_the_ID(), '_sale_price', true);
                            // $sale will return sale price

                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt=""> -->
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo $image[0]; ?>" alt="<?php //the_field('full_title'); 
                                                                                        ?>">
                                        </a>
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <?php
                                            printrating($average_rating);
                                            ?>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="price">

                                            <ul>
                                                <li>Rs. <?php echo $sale ?>/-</li>
                                                <li class="discount">Rs. <?php echo $price ?>/-</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">

                        <?php

                        $args = array(
                            'post_type' => 'product',
                            'orderby' => 'post_date',
                            'order' => 'ASC',
                            // 'product_cat' => 'bin',
                            'posts_per_page' => 8,
                        );
                        $index = 0;
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $index++;

                            $average_rating = $product->get_average_rating();
                            $price = get_post_meta(get_the_ID(), '_regular_price', true);
                            // $price will return regular price
                            $sale = get_post_meta(get_the_ID(), '_sale_price', true);
                            // $sale will return sale price

                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt=""> -->
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo $image[0]; ?>" alt="<?php //the_field('full_title'); 
                                                                                        ?>">
                                        </a>
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <?php
                                            printrating($average_rating);
                                            ?>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="price">

                                            <ul>
                                                <li>Rs. <?php echo $sale ?>/-</li>
                                                <li class="discount">Rs. <?php echo $price ?>/-</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>

                <!-- <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ring-product.webp" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                        <i class="fa fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </section>

    <section class="best-product-area lf-padding">
        <div class="product-wrapper bg-height">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute  d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xcard-man.png.pagespeed.ic.atpcqNbLer.webp" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Manz</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>Find The Best Product<br> from Our Shop</h2>
                            <p>Designers who are interesten creating state ofthe.</p>
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape bounce-animate d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ring.png" alt="">
        </div>
    </section>

    <section class="best-collection-area section-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-end">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="best-left-cap">
                        <h2>Best Collection of This Month</h2>
                        <p>Designers who are interesten crea.</p>
                        <a href="#" class="bttn shop1-btn">Shop Now</a>
                    </div>
                    <div class="best-left-img mb-30 d-none d-sm-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xcollection1.png.pagespeed.ic.OD6oEotzwr.webp" alt="">
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="best-mid-img mb-30 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xcollection2.png.pagespeed.ic.1WKxZbEmZj.webp" alt="" style="max-width: none;">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 item-center">
                    <div class="best-right-cap ">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/xcollection3.png.pagespeed.ic.rKxUeaW_F4.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap active">
                                <h4>Menz Winter<br>Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/xcollection4.png.pagespeed.ic.3qNjVmyPpO.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/xcollection5.png.pagespeed.ic.LwLQ9InyzI.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-wrapper lf-padding">
        <div class="latest-area latest-height d-flex align-items-center" data-background="<?php echo get_template_directory_uri(); ?>/img/latest-offer.png" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/latest-offer.png&quot;);">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                        <div class="latest-caption">
                            <h2>Get Our<br>Latest Offers News</h2>
                            <p>Subscribe news latter</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 ">
                        <div class="latest-subscribe">
                            <form action="#">
                                <input type="email" placeholder="Your email here">
                                <button>Shop Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="man-shape">
                <img src="assets/img/collection/xlatest-man.png.pagespeed.ic.VkSdr1wWF0.webp" alt="" data-pagespeed-url-hash="79868044" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </div>
        </div>
    </section>

    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="fa fa-truck"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="fa fa-lock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="fa fa-undo"></i>
                        <h6>Easy Return System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-items">
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp" alt="" data-pagespeed-url-hash="3826380427" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="gallery-items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp" alt="" data-pagespeed-url-hash="4120880348" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="gallery-items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp" alt="" data-pagespeed-url-hash="120412973" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="gallery-items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp" alt="" data-pagespeed-url-hash="414912894" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="gallery-items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp" alt="" data-pagespeed-url-hash="709412815" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();

function printrating($rating_count)
{
    for ($i = 0; $i < $rating_count; $i++) {
?>
        <i class="fa fa-star"></i>
    <?php
    }
    for ($i = 0; $i < 5 - $rating_count; $i++) {
    ?>
        <i class="fa fa-star low-star"></i>
<?php
    }
}
