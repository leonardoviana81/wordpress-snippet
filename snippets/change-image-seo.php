<?php
//---------------------------------------------------------------------------------------
// Muda tamanho da image das redes sociais do Yoast em determinadas páginas
//---------------------------------------------------------------------------------------
add_image_size( 'prod-servicos-seo', 700, 394, true );
function hotswap_og_img($str) {
	if( is_singular( array( 'post', 'opinioes' ) ) ){
		$image = get_the_post_thumbnail_url($post->ID, 'prod-servicos-seo');
		return $image;
	}
}
add_filter('wpseo_opengraph_image', 'hotswap_og_img');
add_filter('wpseo_twitter_image', 'hotswap_og_img');