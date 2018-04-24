<?php
/**
 * Phantom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Phantom
 */

 /**
  * Enqueue styles and scripts
  */
 function phantom_enqueue_assets() {
   /* theme's primary style.css file (root) */
   wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

   /* template's primary css file */
   wp_enqueue_style( 'phantom-styling' , get_template_directory_uri() . '/assets/css/style.css' );
   wp_enqueue_style( 'phantom-custom-styling' , get_template_directory_uri() . '/assets/css/custom-style.css' );
   wp_enqueue_style( 'font-awesome' , 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	 wp_enqueue_script('jquery');
   wp_enqueue_script( 'skel' , get_template_directory_uri() . '/assets/js/skel.min.js' );
   wp_enqueue_script( 'util' , get_template_directory_uri() . '/assets/js/util.js' );
   wp_enqueue_script( 'phantom-js' , get_template_directory_uri() . '/assets/js/main.js' );
 }

// Theme Setup
add_action( 'wp_enqueue_scripts' , 'phantom_enqueue_assets' );
