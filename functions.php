<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'handisoutien-styles', get_stylesheet_directory_uri() . '/css/handisoutien.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'handisoutien-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'handisoutien', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Enqueue Google Fonts
function add_google_fonts() {
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// Register Widget positions
add_action( 'widgets_init', 'handisoutien_widgets_init' );
if ( ! function_exists( 'handisoutien_widgets_init' ) ) {
	function handisoutien_widgets_init() {
		register_sidebar(
			array(
                'id' => 'header_above',
                'name' => __( 'Header above', 'handisoutien' ),
                'description' => __( 'Zone de widgets au dessus du Header', 'handisoutien' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widgettitle">',
                'after_title' => '</h4>',			
            )
        );

        register_sidebar(
            array(
                'id' => 'ocs_btn',
                'name' => __( 'Offcanvas button', 'handisoutien' ),
                'description' => __( 'Bouton du menu mobile', 'handisoutien' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widgettitle">',
                'after_title' => '</h4>',
            )
        );
    }
}

// Dashicons
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'dashicons' );
} );

// Change widget wrapper tag inside OCS offcanvas
add_filter( 'ocs_register_sidebar_args', 'custom_ocs_sidebar_args', 10, 3 );
function custom_ocs_sidebar_args( $args, $sidebar_id, $sidebar_data ) {
	$args['before_widget'] = '<div id="%1$s" class="widget %2$s">';
	$args['after_widget'] = '</div>';
	$args['before_title'] = '<h3 class="widget-title widgettitle">';
	$args['after_title'] = '</h3>';
  return $args;
}
