<?php
//---------------------------------------------------------------------------------------
// Mostra barra superior de Admin do site apenas para administradores (Frontend)
//---------------------------------------------------------------------------------------
add_filter( "show_admin_bar" , "hide_admin_bar2");
function hide_admin_bar2(){
	if ( !current_user_can('manage_options') ) {
		return false;
	} else {
		return true;
	}
}