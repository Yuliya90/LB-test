<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'min', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}    