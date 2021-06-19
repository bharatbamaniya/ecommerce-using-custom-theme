<?php
/**
 * Template Name: Template Contact
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


<section class="contact-section">
    <div class="container">
	
        <div class="d-none d-sm-block mb-5 pb-4">
            <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group"
                style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; touch-action: pan-x pan-y;">
                
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14788.852765715563!2d82.13216042146318!3d22.07967375113602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a280b117b9ab6a7%3A0xc6f3f89d9eac7caf!2sBilaspur%2C%20Chhattisgarh%20495001!5e0!3m2!1sen!2sin!4v1623997836156!5m2!1sen!2sin"
                        aria-hidden="true" frameborder="0" tabindex="-1"
                        style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                    <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14788.852765715563!2d82.13216042146318!3d22.07967375113602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a280b117b9ab6a7%3A0xc6f3f89d9eac7caf!2sBilaspur%2C%20Chhattisgarh%20495001!5e0!3m2!1sen!2sin!4v1623997836156!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
        
	<div class="wrapper contact-us-template" id="full-width-page-wrapper">

    <div class="row">
        <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                placeholder=" Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Buttonwood, California.</h3>
                    <p>Rosemead, CA 91770</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+1 253 565 2365</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>support@colorlib.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
	</div>
</div>
</section>


<?php
get_footer();

//<div class="element2">