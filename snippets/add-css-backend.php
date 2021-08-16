<?php
//---------------------------------------------------------------------------------------
// Adicionando um CSS no Backend
//---------------------------------------------------------------------------------------
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
	wp_enqueue_style( 'admin_css_pz', get_stylesheet_directory_uri() . '/admin-leo.css', false, '1.0.0' );
}