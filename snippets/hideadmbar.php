<?php
//---------------------------------------------------------------------------------------
// Remove barra superior de Admin do site (Frontend)
//---------------------------------------------------------------------------------------
add_filter( "show_admin_bar" , "hide_admin_bar");
function hide_admin_bar(){
	return false;
}