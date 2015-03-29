<div id="comments">
    <ul id="comment-list">
        <h4>已有<?php echo get_comments_number(); ?>条评论</h4>
        <?php
            $args = array(
                'walker' => null, // ?
                'max_depth' => '',
                'style' => 'ul', // div, ol
                'callback' => null, // 自己定义的评论展示函数
                'end-callback' => null,
                'type' => 'all', // all, comment, pinkback, trackback, pings
                'reply_text' => '回复',
                'page' => '',
                'per_page' => '20',
                'avatar_size' => 64, // gravatar 1 to 512. 0 hide avatars
                'reverse_top_level' => 0, // 1 倒序显示列表
                'reverse_children' => '',
                'format' => 'xhtml', // or html5 @since 3.6
                'short_ping' => false // $since 3.6
            );
        ?>
        <?php wp_list_comments($args); ?>
    </ul>
</div>
<?php
    $args = array(
        'id_form' => 'commentform',
        'id_submit' => 'comment-submit',
        'title_reply' => __('Leave a Reply'),
        'title_reply_to' => __('Leave a Reply to %s'),
        'cancel_reply_link' => __('Cancel Reply'),
        'label_submit' => __('Post Comment'),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun')
            . '</label><textarea name="comment" id="comment" cols="45" rows="8" aria-required="ture"></textarea></p>',
        'must_log_in' => '<p class="must-log-in">' .
            sprintf(
                __('You must be <a href="%s">logged in</a> to post a comment.'),
                wp_login_url(apply_filters('the_permalink', get_permalink()))
            ) . '</p>',
        'comment_notes_before' => '<p class="comment-notes">' .
            __('Your email address will not be published.') . ($reg ? $required_text : '') .
            '</p>',
        'comment_notes_after' => '',
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' =>
                '<p class="comment-form-item comment-form-author">' .
                '<label for="author">' . '网名' . '</label> ' .
                ($reg ? '<span class="requried">*</span>' : '') .
                '<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) .
                '" size="30"' . $aria_reg . ' /></p>',
            'email' =>
                '<p class="comment-form-item comment-form-email">' .
                '<label for="email">' . '邮箱' . '</label> ' .
                ($reg ? '<span class="requried">*</span>' : '') .
                '<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) .
                '" size="30"' . $aria_reg . ' /></p>',
            'url' =>
                '<p class="comment-form-item comment-form-url"><label for="ulr">网址</label>' .
                '<input type="text" id="url" name="url" value="' . esc_attr($commenter['comment_author_url']) .
                '" size="30" /></p>'
            )
        )
    );
?>
<?php comment_form($args); ?>