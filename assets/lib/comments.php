<?php if (post_password_required()){
    return;
    }
?>

<div class="post-comments__area">
    <?php if (have_comments()): ?>
        <div class="post-comments__list">
            <?php wp_list_comments( array( 'style' => 'div', 'avatar_size' => '70' ) ); ?>
        </div>
    <?php endif; ?>
</div>