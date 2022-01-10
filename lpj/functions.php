<?php

// load bootstrap css js
function load_bootstrap(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), ' ', 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), ' ', true);

    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), ' ', 'all');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// Theme supports 
add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Image sizes
add_image_size('post-priview', 280, 179, true);
add_image_size('post-priview-large', 800, 400, true);

// Custom logo
function lpj_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'lpj_custom_logo_setup' );

// Register menus
function lpj_register_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lpj'),
        'footer-menu' => __('Footer Menu', 'lpj'),
        'sidebar-menu' => __('Sidebar Menu', 'lpj'),
    ));
}
add_action('init', 'lpj_register_menus');

// import walker
require_once get_template_directory() . '/template-parts/walker.php';