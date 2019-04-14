<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN ENQUEUE
	========================
*/

function load_custom_wp_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . './dist/css/admin.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


/*
	========================
		Login ENQUEUE 
	========================
*/

function mlm_enqueue_style() {
wp_enqueue_style( 'core', get_template_directory_uri() . './dist/css/login.css', false ); //develope

}

function mlm_enqueue_script() {
	// wp_enqueue_script( 'my-js',  get_template_directory_uri() . '/src/js/login.js', false ); //develope
	wp_enqueue_script( 'my-js',  get_template_directory_uri() . './dist/bundle.min.js', false ); 
}

add_action( 'login_enqueue_scripts', 'mlm_enqueue_style', 10 );
add_action( 'login_enqueue_scripts', 'mlm_enqueue_script', 1 );

/*
	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/

function mlm_scripts_css() {
	//for Develop
	// wp_enqueue_style( 'site_main', get_template_directory_uri() . '/src/css/main.css', false ); 
	// wp_enqueue_style( 'flexGrid', get_template_directory_uri() . '/src/css/flexboxgrid.min.css', false ); 
	// wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/src/js/main.js', array(), '1.0.0', false );

		//for Dist
		wp_enqueue_style( 'mainCss', get_template_directory_uri() . './dist/css/main.min.css', false ); 
	 	wp_enqueue_script( 'mainJs', get_template_directory_uri() . './dist/js/bundle.min.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'mlm_scripts_css' );
















