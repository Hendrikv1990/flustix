<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
        wp_enqueue_style( 'fullpage-css', get_stylesheet_directory_uri() . '/css/jquery.fullPage.css', array(), $the_theme->get( 'Version' ) );

        wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
        wp_enqueue_style( 'owl-css', get_stylesheet_directory_uri() . '/css/assets/owl.carousel.min.css', array(), false );
        wp_enqueue_style( 'owl-css-theme', get_stylesheet_directory_uri() . '/css/assets/owl.theme.default.min.css', array(), false );


        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'carousel-scripts', get_template_directory_uri() . '/js/owl.carousel.js', array(), false);
        wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
        wp_enqueue_script( 'scrolloverflow-scripts', get_template_directory_uri() . '/js/scrolloverflow.js', array(), false);
        wp_enqueue_script( 'easing-scripts', get_template_directory_uri() . '/js/jquery.easings.min.js', array(), false);
        wp_enqueue_script( 'fullPage-scripts', get_template_directory_uri() . '/js/jquery.fullPage.js', array(), false);
        wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
        wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/theme-custom.js', array(), false);

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
