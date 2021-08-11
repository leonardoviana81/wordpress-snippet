<?php
//---------------------------------------------------------------------------------------
// Modifica o slug base do autor
//---------------------------------------------------------------------------------------
function custom_author_base() {
    global $wp_rewrite;
    $wp_rewrite->author_base = 'colaborador';
}
add_action( 'init', 'custom_author_base' );