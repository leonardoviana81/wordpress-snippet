<?php
//---------------------------------------------------------------------------------------
// Adiciona classe referente ao nível de usuário no BODY do Backend
//---------------------------------------------------------------------------------------
add_filter('admin_body_class', function($classes) {
	if( is_user_logged_in() ) { 
		$author_obj = wp_get_current_user(); 
		if(is_array($author_obj->roles)) {
			foreach($author_obj->roles as $role) {
				$classes .= " user-role-{$role} ";
			}
		}
	}
	return rtrim($classes);
});