<?php 
    $comments_args = array( 
        'label_submit'=>'Post Comment',
        'title_reply'=>'<div id="replyComment">
                            <p class="text-center">Leave a Comment Below...</p>
                        </div>',
        'comment_notes_before' => '<small class="comment-notes">' . __( '<em>Your email address will not be published.</em>' ) . ( $req ? $required_text : '' ) . '</small>',
        'comment_field' => '<div class="form-group">
                                <label for="comment">' . _x( '<span class="badge badge-warning">Leave a Comment</span>', 'noun' ) . '</label>
                                <br />
                                <textarea id="comment" name="comment" aria-required="true" rows="10" class="form-control"></textarea>
                            </div>',
        'author' => '<div class="form-group">
                            <label for="author">' . __( 'Name', 'strapped_down' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . 'class="form-control"' . $aria_req . '
                     </div>',
);
comment_form($comments_args); ?>



<a id="leaveComment" href="#"></a>
<section>
	<?php // comment_form(''); ?>
	<?php if (have_comments()) : ?>
	<a id="comments" href="#"></a>
	<p class="badge badge-success">This article currently has <?php comments_number( 'no coments', 'one comment', '% comments' ); ?>.</p>
        <p><?php wp_list_comments(array('callback' => 'strapped_down_comment')); ?><p>
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