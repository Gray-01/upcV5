<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_script( 'js', get_template_directory_uri() . 'assets/js/main.js', array(), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>





