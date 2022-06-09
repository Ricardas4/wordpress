|<?php
function projektas_theme_support(){
add_theme_support('title_tag');
}
add_action('after_setup_theme',"projektas_theme_support");

function projektas_register_styles(){
    $version = wp_get_theme()->get( 'version');
wp_enqueue_style('projektas-style', get_template_directory_uri() . "/projektas/css/templatemo-style.css", array(),'1.0', 'all');
wp_enqueue_style('projektas-font', "https://fonts.googleapis.com/css?family=Open+Sans:400"() . "/style.css", array(),'1.0', 'all');
}
add_action( 'wp_enqueue_scripts','followandrew_register_styles');
function projektas_register_scripts(){
    wp_enqueue_script('projektas' , get_template_directory_uri(). "/assets/js/jquery.min.js"  , array(), '1.0', true);
    wp_enqueue_script('projektas1' , get_template_directory_uri(). "/assets/js/parallax.min.js"  , array(), '1.0', true);

}