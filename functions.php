<?php

function thinktrees_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	// wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false );

}
add_action('wp_enqueue_scripts', 'thinktrees_resources');

function theme_js() {
    wp_enqueue_script( 'bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array( 'jquery' ));
		wp_enqueue_script( 'myscript', get_template_directory_uri() . '/myscript.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js');

function thinktrees_enqueue_google_fonts() {
	wp_enqueue_style( 'open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
}
add_action( 'wp_enqueue_scripts', 'thinktrees_enqueue_google_fonts' );


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
                // 'menu'              => 'primary',
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar-area',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
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

	//add custom header support
	$args = array(
		'default-image'      => get_parent_theme_file_uri( '/images/homeback.jpg' ),
		'width'              => 2000,
		'height'             => 1200,
		'flex-height'        => true
	);
	add_theme_support( 'custom-header', $args );

	//add custom logo support
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );



}
add_action('after_setup_theme', 'thinktrees_setup');

//shows custom logo
function thinktrees_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

add_filter('get_custom_logo','change_logo_class');


function change_logo_class($html)
{
	$html = str_replace('class="custom-logo-link"', 'class="custom-logo-link navbar-brand"', $html);
	return $html;
}


// Add Widget Areas
function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Banner Area',
		'id' => 'banner',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

	register_sidebar( array(
		'name' => 'Green Area',
		'id' => 'greenarea',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Middel Gray Area Wide',
		'id' => 'middlewide',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Middel Gray Area 1',
		'id' => 'middlecol1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));
	register_sidebar( array(
		'name' => 'Middel Gray Area 2',
		'id' => 'middlecol2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));
	register_sidebar( array(
		'name' => 'Middel Gray Area 3',
		'id' => 'middlecol3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));
	register_sidebar( array(
		'name' => 'Middel Gray Area 4',
		'id' => 'middlecol4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

	register_sidebar( array(
		'name' => 'Orange Area 1',
		'id' => 'orange1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar( array(
		'name' => 'Orange Area 2',
		'id' => 'orange2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	));

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	));


}

add_action('widgets_init', 'ourWidgetsInit');
