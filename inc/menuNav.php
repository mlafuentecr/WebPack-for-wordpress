<?php

/*
	
@package sunsettheme
	
	========================
		menuNav FUNCTIONS
	========================
*/


// blank_nav this is call from header  blank_nav();
function blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'Navbar',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
// Register HTML5 Blank Navigation
function register_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' 	=> __('Header Menu', 'menuNav'), 	// Main Navigation
        'sidebar-menu' 	=> __('Sidebar Menu', 'menuNav'), 	// Sidebar Navigation
        'extra-menu' 		=> __('Extra Menu', 'menuNav') 		// Extra Navigation if needed (duplicate as many as you need!)
    ));
}

	// Add Actions
	add_action('init', 'register_menu');








