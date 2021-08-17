<?php
//---------------------------------------------------------------------------------------
// Utilizar $_GET no Wordpress
//---------------------------------------------------------------------------------------
add_filter('query_vars', 'customquery_vars' );
function customquery_vars( $qvars )
{
    $qvars[] = 'variavel'; //http://url.com.br/?variavel=
	return $qvars;
}