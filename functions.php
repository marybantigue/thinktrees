<?php

function thinktrees_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts', 'thinktrees_resources');

function theme_js() {
    wp_enqueue_script( 'bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");
}
add_action( 'wp_enqueue_scripts', 'theme_js');


function register_menus() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('top-left-menu',__( 'Top-left Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_menus' );

//nav walker
require_once('wp-bootstrap-navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
    );
}




// Theme setup
function thinktrees_setup() {

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));

	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'thinktrees_setup');
