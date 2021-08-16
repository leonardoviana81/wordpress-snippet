<?php
//---------------------------------------------------------------------------------------
// Adiciona classe no body em páginas específicas
//---------------------------------------------------------------------------------------
add_filter( 'body_class','new_body_classes' );
function new_body_classes( $classes ) {
    if ( is_singular( 'opinioes' ) ) {
        $classes[] = 'with_aside';
        $classes[] = 'aside_right';
    }
	if( is_tax('categoria_produtos_e_servicos') ){
    	$classes[] = 'with_aside';
    	$classes[] = 'aside_left';
    	$classes[] = 'prodserv_mobi';
	}
	if( is_post_type_archive('produtos-e-servicos') ){
    	$classes[] = 'with_aside';
    	$classes[] = 'aside_left';
    	$classes[] = 'prodserv_mobi';
	}
    return $classes;
}