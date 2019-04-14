<?php

/*
	
@package mlm
	
	========================
		look admin
	========================
*/

add_action( 'wp_dashboard_setup', 'dashboard_widgets' );


function dashboard_widgets() {
	wp_add_dashboard_widget(
		'quick-menu-access',    // Widget slug and css
		'Quick Menu Access',   // Title.
		'dashboard_menu'		// Display function .	$result =  
);

}
function dashboard_menu() {
	echo "Hello World, I'm a great Dashboard Widget";
}