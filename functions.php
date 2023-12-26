<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support( 'title-tag' );


// CSS and JQuery files
function emon_css_and_js_files_loading() {
    // CSS
    wp_enqueue_style('emon-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // JQuery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.2', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'emon_css_and_js_files_loading' );