<?php
//---------------------------------------------------------------------------------------
// ACF - Ordena o campo de Relationship por data de publicação
//---------------------------------------------------------------------------------------
add_filter('acf/fields/relationship/query/key=field_5ff612b9a0fdb', 'my_acf_fields_relationship_query', 10, 3);
function my_acf_fields_relationship_query( $args, $field, $post_id ) {
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
	$args['post_status'] = 'publish';

    return $args;
}