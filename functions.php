<?php
function wpnewproject_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/build/css/style.css',
		wp_get_theme()->get('Version')
	);
	
	
	// Google fonts
	$query_args = array(
		'family' => 'Roboto:300,500',
		'subset' => 'latin-ext'
	);
	
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style('google_fonts');
}

add_action( 'wp_enqueue_scripts', 'wpnewproject_styles' );


function wpnewproject_setup() {
	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'		=> 60,
		'width'		=> 270,
		'flex-height' => true,
	));
	
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'event-thumb', 640, 331, array( 'center', 'center'), true); //300 pixels wide (and unlimited height)
	
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'gallery'
	));
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',	'twentyseventeen' ),
	) );

	add_theme_support( 'custom-header', apply_filters( 'twentyseventeen_custom_header_args', array(
		'width'				   => 1200,
		'height'				   => 340,
		'flex-height'			   => true,
		'wp-head-callback'	   => 'twentyseventeen_header_style',
	) ) );
	
	//add_image_size( 'event-thumb' 640, 331, array( 'center', 'center')  ); //300 pixels wide (and unlimited height)
}

add_action( 'after_setup_theme', 'wpnewproject_setup' );

// Include Google Tag Manger code
require_once( get_stylesheet_directory() . '/inc/inc-widgets.php' );

// Include Google Tag Manger code
require_once( get_stylesheet_directory() . '/inc/inc-gtm.php' );

// Include Google fonts
require_once( get_stylesheet_directory() . '/inc/inc-gf.php' );

// Woocommerce setup
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_shortcode('cat_description', 'my_cat_description_shortcode');

function my_cat_description_shortcode($atts) {

	$a = shortcode_atts( array(
		'id' => 0,
	), $atts );

	return category_description($a['id']);

}

?>
