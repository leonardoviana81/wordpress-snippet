<?php
//---------------------------------------------------------------------------------------
// Modifica os nomes dos itens do menu e submenu no Backend
//---------------------------------------------------------------------------------------
function customize_admin_menu_labels() {
	global $menu;
	global $submenu;
	$menu["55.5"][0] = 'E-commerce';
	$menu["25.8"][0] = 'Banners';
	$menu["55.5"][6] = 'dashicons-cart';
	$menu["25.8"][6] = 'dashicons-flag';
	$submenu['edit.php'][5][0] = 'Artigos';
	$submenu['edit.php'][10][0] = 'Adicionar Artigos';
}
add_action( 'admin_menu', 'customize_admin_menu_labels' );