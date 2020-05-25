<?php
/**
 * DDB functions and definitions
 * 
 * 1- Load CSS styles
 * 2- Load JS 
 * 3- Register menus
 */


 /**
  * 1 - LOAD CSS STYLES 
  */
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

/**
 *  2 - LOAD JS SCRIPTS 
 */
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/assets/js/jquery-3.5.1.js', array('jquery'), null, true);
    

    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_js');

/** 
 *  3 - Register Menus
 */
add_theme_support('menus');

/** 
 * Menus 
 */
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    )
);

/**
 * Register Custom Navigation Walker (Bootstrap nav)
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

