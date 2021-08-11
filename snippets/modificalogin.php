<?php
//---------------------------------------------------------------------------------------
// Modificar tela de login no backend
//---------------------------------------------------------------------------------------
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/style-login.css', null, date("YmdHis") );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
function my_login_logo_url() {
    return "https://leonardoviana.com.br/";
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return 'Leonardo Viana - Desenvolvimento Web';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
function login_function() {
    add_filter( 'gettext', 'username_change', 20, 3 );
    function username_change( $translated_text, $text, $domain ) 
    {
        if ($text === 'Username or Email Address') 
        {
            $translated_text = 'Login_';
        }
        return $translated_text;
    }
}
add_action( 'login_head', 'login_function' );
function login_function2() {
    add_filter( 'gettext', 'username_change2', 20, 3 );
    function username_change2( $translated_text, $text, $domain ) 
    {
        if ($text === 'Password') 
        {
            $translated_text = 'Senha_';
        }
        return $translated_text;
    }
}
add_action( 'login_head', 'login_function2' );
function login_function3() {
    add_filter( 'gettext', 'username_change3', 20, 3 );
    function username_change3( $translated_text, $text, $domain ) 
    {
        if ($text === 'Lost your password?') 
        {
            $translated_text = '> Esqueci a senha';
        }
        return $translated_text;
    }
}
add_action( 'login_head', 'login_function3' );
function login_scripts() {
    wp_enqueue_script( 'login_pz', get_stylesheet_directory_uri() . '/login/login_pz.js', array( 'jquery' ), date("YmdHis"), true );
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, date("YmdHis"));
	wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700&display=swap', null, date("YmdHis"));
}
add_action( 'login_enqueue_scripts', 'login_scripts' );