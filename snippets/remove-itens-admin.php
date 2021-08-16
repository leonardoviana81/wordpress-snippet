<?php
//---------------------------------------------------------------------------------------
// Remove itens da barra superior de ADMIN
//---------------------------------------------------------------------------------------
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );
function remove_wp_nodes(){
	global $wp_admin_bar;   
	$wp_admin_bar->remove_node( 'new-post' );
	$wp_admin_bar->remove_node( 'new-link' );
	$wp_admin_bar->remove_node( 'new-media' );
	$wp_admin_bar->remove_node( 'updates' );
	$wp_admin_bar->remove_node( 'new-content' );
	$wp_admin_bar->remove_node( 'wpseo-menu' );
}