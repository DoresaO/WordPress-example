<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
	
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	
	
	//js
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');
/*
	==========================================
	Activate menus
	==========================================
*/

function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

//per te shtuar video dhe image ne post, ne versinon e ri shihet tek buttonn ne anen e majt
add_theme_support('post-formats', array('aside', 'image', 'video'));