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
    
    /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
    );
    /**
	* Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 190,
			'width'       => 190,
			'flex-width'  => false,
			'flex-height' => false,
		)
    );
    
    // Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

}
endif;
add_action( 'after_setup_theme', 'custom_setup' );

function custom_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'custom' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'custom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'custom_widgets_init' );

function custom_script() {
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'custom_script' );