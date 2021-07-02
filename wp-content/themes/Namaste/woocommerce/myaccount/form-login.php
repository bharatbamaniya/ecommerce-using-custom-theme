<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div class="single-slider slider-height2 d-flex align-items-center mb-85" data-background="<?php echo get_template_directory_uri(); ?>/img/category.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/category.jpg&quot;);">
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
</div>

<div class="container">

	<?php
	do_action('woocommerce_before_customer_login_form');

	$col = 'yes' === get_option('woocommerce_enable_myaccount_registration') ? 6 : 12;
	?>


	<section class="login_part section_padding ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6" id="order-1">
					<div class="login_part_text text-center">
						<div class="login_part_text_iner">
							<h2>New to our Shop?</h2>
							<p>There are advances being made in science and technology
								everyday, and a good example of this is the</p>
							<button class="btn_3" onclick="show_register_form()" id="create-account-btn">Create an Account</button>
							<button class="btn_3" onclick="show_login_form()" id="login-account-btn">Existing an Account, Sign In</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6" id="order-2">
					<div class="login_part_form">
						<div class="login_part_form_iner">
							<h3>Welcome Back ! <br>
								Please Sign in now</h3>

							<form class="woocommerce-form woocommerce-form-login login row contact_form" method="post">

								<?php do_action('woocommerce_login_form_start'); ?>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<div class="col-md-12 form-group p_star" style="padding-left: 0px;">
									<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" placeholder="Username" /><?php // @codingStandardsIgnoreLine 
																																																																													?>
								</div>
								</p>
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<div class="col-md-12 form-group p_star" style="padding-left: 0px;">
									<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autocomplete="current-password" placeholder="Password" />
								</div>
								</p>

								<?php do_action('woocommerce_login_form'); ?>

								<p class="form-row">
								<div class="col-md-12 form-group p_star" style="padding-left: 0px;">
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'understrap'); ?></span>
								</div>
								</p>
								<div class="col-md-12 form-group p_star" style="padding-left: 0px;">

									<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
									<button type="submit" class="woocommerce-form-login__submit btn btn-outline-primary" name="login" value="<?php esc_attr_e('Log in', 'understrap'); ?>"><?php esc_html_e('Log in', 'understrap'); ?></button>

									<p class="woocommerce-LostPassword lost_password">
										<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'understrap'); ?></a>
									</p>

								</div>
								<?php do_action('woocommerce_login_form_end'); ?>

							</form>
						</div>
					</div>
					<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
						<div class="Register_part_form">

							<h2><?php esc_html_e('Register', 'understrap'); ?></h2>

							<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>

								<?php do_action('woocommerce_register_form_start'); ?>

								<?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>

									<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
										<label for="reg_username"><?php esc_html_e('Username', 'understrap'); ?>&nbsp;<span class="required">*</span></label>
										<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																										?>
									</p>

								<?php endif; ?>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="reg_email"><?php esc_html_e('Email address', 'understrap'); ?>&nbsp;<span class="required">*</span></label>
									<input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																					?>
								</p>

								<?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>

									<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
										<label for="reg_password"><?php esc_html_e('Password', 'understrap'); ?>&nbsp;<span class="required">*</span></label>
										<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="reg_password" autocomplete="new-password" />
									</p>

								<?php else : ?>

									<p><?php esc_html_e('A password will be sent to your email address.', 'understrap'); ?></p>

								<?php endif; ?>

								<?php do_action('woocommerce_register_form'); ?>

								<p class="woocommerce-form-row form-row">
									<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
									<button type="submit" class="woocommerce-form-register__submit btn btn-outline-primary" name="register" value="<?php esc_attr_e('Register', 'understrap'); ?>"><?php esc_html_e('Register', 'understrap'); ?></button>
								</p>

								<?php do_action('woocommerce_register_form_end'); ?>

							</form>
						<?php endif; ?>

						</div>


				</div>
			</div>
	</section>

	<script>
		function show_register_form() {
			document.querySelector('#order-1').style.order = 1;
			document.querySelector('#create-account-btn').style.display = "none";
			document.querySelector('#login-account-btn').style.display = "inline-block";
			document.querySelector('.Register_part_form').style.display = "block";
			document.querySelector('.login_part_form').style.display = "none";


		}

		function show_login_form() {
			document.querySelector('#order-1').style.order = 0;
			document.querySelector('#create-account-btn').style.display = "inline-block";
			document.querySelector('#login-account-btn').style.display = "none";
			document.querySelector('.Register_part_form').style.display = "none";
			document.querySelector('.login_part_form').style.display = "block";


		}
	</script>
</div>
<?php do_action('woocommerce_after_customer_login_form'); ?>