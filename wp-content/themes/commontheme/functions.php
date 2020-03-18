<?php
register_nav_menus(
    array(
        'primary' => __( 'Primary', 'commontheme' ),
        'footer' => __( 'Footer Menu', 'commontheme' ),
        'social' => __( 'Social Links Menu', 'commontheme' ),
    )
);


/**
 * Enqueue scripts and styles.
 */
function commontheme_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'commontheme-reset-style', get_stylesheet_directory_uri() . '/css/reset.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-owl-carousel-style', get_stylesheet_directory_uri() . '/css/owl.carousel.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-animate-style', get_stylesheet_directory_uri() . '/css/animate.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-aos-style', get_stylesheet_directory_uri() . '/css/aos.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-main-style', get_stylesheet_directory_uri() . '/css/main.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'commontheme-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script( 'commontheme-carousel-js', get_theme_file_uri( '/js/owl.carousel.js' ), array(), '1.0', true );
    wp_enqueue_script( 'commontheme-aos-js', get_theme_file_uri( '/js/aos.js' ), array(), '1.0', true );
    wp_enqueue_script( 'commontheme-common-js', get_theme_file_uri( '/js/common.js' ), array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'commontheme_scripts' );