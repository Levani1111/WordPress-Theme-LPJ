<?php

// load bootstrap css js
function load_bootstrap(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), ' ', 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), ' ', true);

    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), ' ', 'all');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');


// import walker
require_once get_template_directory() . '/template-parts/walker.php';

// import widgets
require_once get_template_directory() . '/template-parts/widgets.php';

// Theme supports 
add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Image sizes
add_image_size('post-priview', 280, 171, true);
add_image_size('post-priview-large', 800, 400, true);
add_image_size('post-priview-small', 270, 172, true);

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

// Register sidebars
function lpj_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'lpj' ),
        'id'            => 'sidebar-0',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 1', 'lpj' ),
        'id'            => 'sidebar-1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 2', 'lpj' ),
        'id'            => 'sidebar-2',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'lpj_widgets_init' );

// Customizer Objects
function lpj_customize_register( $wp_customize ) {

    // Image slider section
    $wp_customize->add_section( 'lpj_slider_settings', array(
        'title' => __( 'Slider Image Settings' ),
        'description' => __( 'Edit slider image settings' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
      ) );

    // activate slider setting
    $wp_customize->add_setting( 'lpj_slider_activete', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '1',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
      ) );
    
    $wp_customize->add_control( 'lpj_slider_activete', array(
        'type' => 'checkbox',
        'section' => 'lpj_slider_settings', // Required, core or custom.
        'label' => __( 'Activate Image Slider' ),
        'description' => __( 'Activate or deactivate the image slider for front page.' ),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
    ),
    ) );
    
    //  slider image 1 setting
    $wp_customize->add_setting( 'lpj_slider_imge_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 
        new WP_Customize_Image_Control( 
            $wp_customize, 
            'lpj_slider_imge_1', 
            array(
        'label' => __( 'Slider Image 1' ),
        'section' => 'lpj_slider_settings',
        'height' => 200, //cropper height
        'width' => 1000, //cropper width
        'flex_width' => false, // allow any width
        'flex_height' => false, // allow any height
    ) ) );

    //  slider image 2 setting
    $wp_customize->add_setting( 'lpj_slider_imge_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Image_Control( 
            $wp_customize, 
            'lpj_slider_imge_2', 
            array(
        'label' => __( 'Slider Image 2' ),
        'section' => 'lpj_slider_settings',
        'height' => 200, //cropper height
        'width' => 1000, //cropper width
        'flex_width' => false, // allow any width
        'flex_height' => false, // allow any height
    ) ) );

      //  slider image 3 setting
      $wp_customize->add_setting( 'lpj_slider_imge_3', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( 
          new WP_Customize_Image_Control( 
              $wp_customize, 
              'lpj_slider_imge_3', 
              array(
            'label' => __( 'Slider Image 3' ),
            'section' => 'lpj_slider_settings',
            'height' => 200, //cropper height
            'width' => 1000, //cropper width
            'flex_width' => false, // allow any width
            'flex_height' => false, // allow any height
      ) ) );

    }
  add_action( 'customize_register', 'lpj_customize_register' );