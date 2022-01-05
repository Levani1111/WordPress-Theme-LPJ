<?php

// load bootstrap css js
function load_bootstrap(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), ' ', 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), ' ', true);
}
add_action('wp_enqueue_scripts', 'load_bootstrap');