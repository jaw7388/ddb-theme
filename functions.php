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
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus 
 
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    )
);

// Sidebars

function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title"></h4>',
            'after-title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title"></h4>',
            'after-title' => '</h4>',
        )
    );
}
add_action('widgets_init', 'my_sidebars');

// Register Custom Navigation Walker (Bootstrap nav)
 
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/////////////////////////////////////////////////////////////////////////
/**
 *  4- Woocommerce support
 */


/**
 * Change number or products per row 
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 9 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );

/**
 *  5- Remove options from woocommerce sort list
 */

add_filter( 'woocommerce_catalog_orderby', 'misha_remove_default_sorting_options' );
 
function misha_remove_default_sorting_options( $options ){
 
	unset( $options[ 'popularity' ] );
	//unset( $options[ 'menu_order' ] );
	unset( $options[ 'rating' ] );
	//unset( $options[ 'date' ] );
	unset( $options[ 'price' ] );
	unset( $options[ 'price-desc' ] );
 
	return $options;
 
}

/**
 *  6- Add order alphabetically to woocommerce sort list
 */

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );

function custom_woocommerce_get_catalog_ordering_args( $args ) {
    $orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

    if ( 'alphabetical' == $orderby_value ) {
        $args['orderby'] = 'title';
        $args['order'] = 'ASC';
    }
    return $args;
}
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
    $sortby['alphabetical'] = __( 'Orden alfabético' );
    return $sortby;
}

/**
 * Change position price on single-product
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

/**
 * Change the breadcrumb separator
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

/*
* HABILITAR CANTIDAD MÍNIMA DE PEDIDO
*/
function woo_minimum_order_amount() {
    $minimum = 30000;  // Modificar 10 por el importe mínimo de compra
    if ( WC()->cart->total < $minimum ) {
      if( is_cart() ) {
        wc_print_notice(
        sprintf( 'Debes realizar un pedido m&iacute;nimo de %s para finalizar tu compra.' , // Personalizar texto
          wc_price( $minimum ),
          wc_price( WC()->cart->total )
        ), 'error'
        );
      } else {
        wc_add_notice(
        sprintf( 'Debes realizar un pedido m&iacute;nimo de %s para finalizar tu compra.' , // Personalizar texto
          wc_price( $minimum ), 
          wc_price( WC()->cart->total )
        ), 'error'
        );
      }
    }
  }
  add_action( 'woocommerce_checkout_process', 'woo_minimum_order_amount' );
  add_action( 'woocommerce_before_cart' , 'woo_minimum_order_amount' );


/*
* Change product button on shop - text 
*/
  add_filter( 'woocommerce_product_add_to_cart_text', function( $text ) {
    if ( 'Read more' == $text ) {
        $text = __( 'More Info', 'woocommerce' );
    }

    return $text;
} );