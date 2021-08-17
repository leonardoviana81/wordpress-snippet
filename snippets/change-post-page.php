<?php
//---------------------------------------------------------------------------------------
// Define a quantidade de Posts por página de acordo com o Custom Post Type
//---------------------------------------------------------------------------------------
add_action( 'pre_get_posts', 'change_posts_per_page' );
function change_posts_per_page( $query ) {
    if( !is_admin() && $query->is_main_query() && $query->query_vars['post_type'] === 'custompost1' ) {
        $query->set( 'posts_per_page', '10' );
    } else if( !is_admin() && $query->is_main_query() && $query->query_vars['post_type'] === 'custompost2' ) {
        $query->set( 'posts_per_page', '15' );
	} else if( !is_admin() && $query->is_main_query() && $query->query_vars['post_type'] === 'custompost3' ) {
        $query->set( 'posts_per_page', '3' );
	}
}