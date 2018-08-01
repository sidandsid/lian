<?php
$fields =  array(
    'author' =>
        '<input class="post-comment-form__name" id="author" name="Name" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' />',
    'email' =>
        '<input class="post-comment-form__email" id="email" name="Email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' />',
    'url' =>
        '<input class="post-comment-form__website" id="url" name="url" type="Website" placeholder="Website" value="' . esc_attr( $commenter['comment_author_url'] ) .
        '" size="30" />',
);

$comments_args = array(
    'class_form' => 'post-comment-form',
    'label_submit' => __( 'Send message', 'textdomain' ),
    'title_reply' => __( '<h3 class="post-comment-form__title">Leave a comment</h3>', 'textdomain' ),
    'comment_notes_before' => '',
    'comment_field' =>  '<textarea class="post-comment-form__textarea id="comment" name="comment" placeholder="'.__('Message','text-domain').'"aria-required="true">' .'</textarea>',
    'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
comment_form( $comments_args );