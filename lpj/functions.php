<?php

// load bootstrap css js
function load_bootstrap(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), ' ', 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), ' ', true);
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// Theme supports 
add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Image sizes
add_image_size('post-priview', 280, 179, true);
add_image_size('post-priview-large', 800, 400, true);
