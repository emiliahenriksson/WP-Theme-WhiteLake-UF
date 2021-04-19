<?php 


/**
 * Enqueue Scripts
 * 
 * CSS
 * Google Font
 * JavaScript
 */
function load_css() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/style.css', false, '20150320');
}
add_action('wp_enqueue_scripts', 'load_css');

function tenor_add_google_font() {
    wp_enqueue_style('tenor_google_font', 'https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap', false);
}
add_action('wp_enqueue_scripts', 'tenor_add_google_font');

function load_js() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', false, '20150320');
}
add_action('wp_enqueue_scripts', 'load_js');

/**
 * Add Theme Support
 */
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );

/**
 * Register Menus
 */
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-top-menu' => 'Mobile Top Menu Location',
        'product-category-menu' => 'Product Category Menu Location',
    )
);

/**
 * Add Support for WooCommerce
 */
  function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


?>