<?php 

add_theme_support( 'menu' );
add_theme_support( 'post-thumbnails');
//Register Menu- THIS ADDS IT TO DASHBOARD APPEARANCE under 'MENUS'
function register_theme_menu() {

	register_nav_menus(
	array(
		'main-menu' => 'Main Menu'
		)
	);
}
add_action( 'init', 'register_theme_menu' );

//Original CSS Styles
function theme_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
// Adding the wp_enqueue_style to make the starting_theme_styles function work
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Original CSS Styles
function theme_js() {
	global $wp_script;

    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
} 

// Adding the wp_enqueue_script to make the starting_theme_js function work
add_action( 'wp_enqueue_scripts', 'theme_js');

//Removes the user login bar at the top 
add_filter( 'show_admin_bar', '__return_false' );
?>

