<?php
//---------------------------------------------------------------------------------------
// Modifica o HTML dos comentários
//---------------------------------------------------------------------------------------
function comments_setentia( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
        	<div class="comment-avatar"><?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
       	    </div>
 			<div class="comment-moldura-cima">
            	<?php printf( __( '<div class="fn">%s</div>' ), get_comment_author_link() ); ?>
                <div class="comment-meta commentmetadata">
                    <?php
                        //$d = 'd/m/Y';
                        $d = 'F/Y';
						$comment_date = get_comment_date( $d, $comment_ID );
						echo ' - '.$comment_date;
					?>
                    <?php edit_comment_link( __( '<em>(Editar)</em>', 'sententia' ), ' ' );
                    ?>
                </div><!-- .comment-meta .commentmetadata -->
			</div>
			<div class="comment-moldura-baixo">
                <div class="comment-content"><?php comment_text(); ?></div>
              <div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
              </div><!-- .reply -->
            </div>
        </article>
    </li>
    <?php
}