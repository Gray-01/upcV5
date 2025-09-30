<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );



	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});
?>


  <!-- <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css"> -->
