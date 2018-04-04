<?php 
    $comments_args = array( 
	'label_submit'=>'Post Comment',
    	'title_reply'=>'<div class="alert alert-primary" role="alert"><h3 class="text-center display-4">Leave a Comment Below...</h3></div>', 
    	'comment_notes_before' => '<small class="comment-notes">' . __( '<em>Your email address will not be published.</em>' ) . ( $req ? $required_text : '*' ) . '</small>',
    	'comment_field' => '<br /><label for="comment">' . _x( '<span class="badge badge-warning">Leave a Comment</span>', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" rows="10" class="form-control"></textarea>',
    	'author' => '<label for="author">' . __( 'Name', 'strapped_down' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . 'class="form-control"' . $aria_req . '',
    );
comment_form($comments_args); ?>
<a id="leaveComment" href="#"></a>
<section>	
	<?php if (have_comments()) : ?>
	<a id="comments" href="#"></a>
	<div class="alert alert-warning text-center">
		This article currently has <?php comments_number( '<u>no comments</u>', 'one comment', '<strong>%</strong> comments' ); ?>.
	</div>
        <?php wp_list_comments(array('callback' => 'strapped_down_comment')); ?>
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav>
                <div><?php previous_comments_link( _e('&larr; Older Comments', 'strapped_down')); ?></div>
                <div><?php next_comments_link(_e('Newer Comments &rarr;', 'strapped_down')); ?></div>
            </nav>
        <?php endif; // check for comment navigation ?>
        <?php elseif (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
            <p><?php _e('Comments are closed.', 'strapped_down'); ?></p>
    <?php endif; ?>
</section>
