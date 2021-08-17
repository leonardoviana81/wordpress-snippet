<?php
//---------------------------------------------------------------------------------------
// Remove o suporte das Tags nos Posts
//---------------------------------------------------------------------------------------
add_action('init', 'remove_tags_post');
function remove_tags_post() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}