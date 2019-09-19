<?php

add_action( 'wp_enqueue_scripts', 'google_fonts' );
function google_fonts() {
	 wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,700&display=swap' );
	 wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	 wp_enqueue_script( 'main.js', get_theme_file_uri( '/js/main.js' ), array(), false, true );
}

add_filter('upload_mimes', 'enable_svg_support');
function enable_svg_support($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}

register_nav_menus(
	array(
		'menu-1' => __( 'Primary', 'twentynineteen' ),
		'footer' => __( 'Footer Menu', 'twentynineteen' ),
		'social' => __( 'Social Links Menu', 'twentynineteen' ),
	)
);

add_theme_support(
	'custom-logo',
	array(
		'height'      => 50,
		'width'       => 50,
		'flex-width'  => true,
		'flex-height' => false,
	)
);

add_shortcode( 'portfolio', 'portfolio_shortcode' );
function portfolio_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'title' => 'Rayder Media Introduction',
			'image' => '',
			'video' => 'http://localhost:8888/rayder/wp-content/uploads/2019/09/rayder-intro.mp4',
		),
		$atts,
		'portfolio'
	);
	ob_start();
	include( 'template-parts/shortcodes/portfolio.php' );
	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'contact-form', 'contact_form_shortcode' );
function contact_form_shortcode() {
	ob_start();
	include( 'template-parts/shortcodes/contact-form.php' );
	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'intro-section', 'intro_section_shortcode' );
function intro_section_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'video' => 'http://localhost:8888/rayder/wp-content/uploads/2019/09/rayder-intro.mp4',
		),
		$atts,
		'intro-section'
	);
	ob_start();
	include( 'template-parts/shortcodes/intro-section.php' );
	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'secondary-overlay', 'secondary_overlay_shortcode' );
function secondary_overlay_shortcode() {
	ob_start();
	include( 'template-parts/shortcodes/secondary-overlay.php' );
	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'client-list', 'client_list_shortcode' );
function client_list_shortcode( $atts ) {
	ob_start();
	include( 'template-parts/shortcodes/client-list.php' );
	$output = ob_get_clean();
	return $output;
}

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}

if(isset($_POST['form_submit'])) {

	$to 				= 'mr.f.kovacs@gmail.com';
	$subject 		= wp_strip_all_tags($_POST['company']);
	$body 			= wp_strip_all_tags($_POST['message']);
	$headers[] 	= 'Content-Type: text/html; charset=UTF-8';

	wp_mail( $to, $subject, $body, $headers );
}
