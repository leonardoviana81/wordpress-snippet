<?php
//---------------------------------------------------------------------------------------
// Remove as principais caixas do Dashboard e adiciona uma caixa com os dados de suporte
//---------------------------------------------------------------------------------------
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
  	//--------
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	//----------
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_products_news']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_blog_news']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
function custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Suporte - Leonardo Viana', 'dashboard_help');
}
function dashboard_help() {
	echo "<img src='https://placeimg.com/50/50/animals' style='float: right; padding: 0px 0px 10px 10px;'/>
	<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. Etiam auctor eu dolor mattis aliquet. Nunc pharetra mi quis elit sodales, nec facilisis lacus euismod. Nam vehicula lorem auctor metus dignissim, et fermentum justo pulvinar. Integer ultrices est sed pharetra viverra. Etiam molestie fringilla nunc sed pulvinar.</p>
	<span><strong>Suporte e atendimento</strong></span>
	<ul style='margin-top: 5px;'>
	<li>Whatsapp: +55 (99) 99999-9999</li>
	<li>E-mail: <a href='mailto:suporte@leonardoviana.com.br'>suporte@leonardoviana.com.br</a></li>
	</ul>";
}
