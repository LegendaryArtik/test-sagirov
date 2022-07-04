<?php
add_action( 'wp_enqueue_scripts', 'spacex_enqueue_styles' );
function spacex_enqueue_styles() {
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css');
    wp_enqueue_style('spacex', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script( 'spacex-js', get_stylesheet_directory_uri() . '/assets/js/script.js', [],[],true);
}


/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Twenty Twenty 1.0
 */
function spacex_menus() {

    $locations = array(
        'primary'  => __( 'Desktop Horizontal Menu', 'spacex' ),
        'mobile'   => __( 'Mobile Menu', 'spacex' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'spacex_menus' );


add_filter( 'get_custom_logo', 'twentytwenty_get_custom_logo' );

add_theme_support( 'custom-logo', [
    'height'      => 100,
    'width'       => 280,
    'flex-width'  => true,
    'flex-height' => true,
    'header-text' => '',
    'unlink-homepage-logo' => false, // WP 5.5
] );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));


}