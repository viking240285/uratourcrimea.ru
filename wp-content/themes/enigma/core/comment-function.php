<?php 
// code for comment
if ( ! function_exists( 'enigma_comment' ) ) :
function enigma_comment( $comment, $args, $depth ) 
{
	//get theme data
	global $comment_data;
	//translations
	 ?>
    <div class="media enigma_comment_box">
		<a class="pull_left_comment">
        <?php echo wp_kses_post( get_avatar( $comment,$size = '60' ) ); ?>
        </a>
        <div class="media-body">
		    <div class="enigma_comment_detail">
				<h4 class="enigma_comment_detail_title"><?php esc_html( comment_author() );?></h4>
				
				<span class="enigma_comment_date">
					<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>				
						<?php esc_html( comment_date('F j, Y') );?>
					<?php else : ?>
						<?php esc_html( comment_date() ); ?>
					<?php endif; ?>
					<?php esc_html_e('at','enigma');?>&nbsp;<?php esc_html( comment_time('g:i a') ); ?>
					
				</span>
				<?php esc_html( comment_text() ); ?>				
				<div class="reply">
				<a href=""><i class="fa fa-mail-reply"></i><?php esc_url( comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ); ?>
				</a>
				</div>
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'enigma' ); ?></em>
				<br/>
				<?php endif; ?>
			</div>
		</div>							
	</div>		
<?php
}
endif;
?>