<?php
//---------------------------------------------------------------------------------------
// Define o tamanho do Excerpt de acordo com o tipo do Post
//---------------------------------------------------------------------------------------
add_filter( 'excerpt_length', 'size_experpt_type', 999 );
function size_experpt_type( $length ) {
	global $post;
	if ($post->post_type == 'post') return 15;
	else if ($post->post_type == 'custompost') return 40;
	else return 15;
}