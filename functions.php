<?php

if ( ! function_exists( 'custom_setup' ) ) :

function custom_setup() { 
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );

    /* Enable Post Thumbnails */  
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );

    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'menu-1' => __( 'Primary', 'custom' ),
			'footer' => __( 'Footer Menu', 'custom' ),
			'social' => __( 'Social Links Menu', 'custom' ),
		)
	);
}