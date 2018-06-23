<div <?php post_class( array( 'post') ) ?> >
    <div class="post-featured-image">
        <?php
        if ( has_post_thumbnail() ){
            the_post_thumbnail( 'full' );
            }
        ?>
    </div>
    <div class="post-content">
        <span class="post-category"><?php the_category(', '); ?></span>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <span class="post-author"><?php the_author_posts_link(); ?></span>
        <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        <?php the_content(); ?>
        <p class="post-tags"><?php the_tags( '',', ' ); ?></p>
    </div>
    <div class="post-footer">
        <a class="post-comments__number js-post-comments__number" href="<?php comments_link(); ?>">
            <?php comments_number( 'No comments', '01 Comment', '0% Comments' ); ?>
        </a>
        <?php
            wp_nav_menu( array( 'theme_location' => 'post-social-media', 'container' => 'nav', 'container_class' => 'post-sm' ) );
        ?>
    </div>
    <div class="post-comments__wrapper js-post-comments__wrapper"><?php comments_template( '/assets/lib/comments.php' ); ?></div>
    <div class="post-comments__reply-wrapper js-post-comments__reply-wrapper"><?php comments_template( '/assets/lib/comment-form.php' ); ?></div>
</div>

