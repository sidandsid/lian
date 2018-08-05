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
        <a class="post-title" href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a>
        <span class="post-author">
            <?php get_template_part('assets/svg/inline', 'user.svg'); ?>
            <?php the_author_posts_link(); ?>
        </span>
        <span class="post-date">
            <?php get_template_part('assets/svg/inline', 'calendar.svg'); ?>
            <?php the_time( get_option( 'date_format' ) ); ?>
        </span>
        <?php the_content(); ?>
    </div>
    <div class="post-footer">
        <span class="post-comments__number">
            <?php get_template_part('assets/svg/inline', 'comments.svg'); ?>
            <?php comments_number( 'No comments', '01 Comment', '0% Comments' ); ?>
        </span>
        <?php
            wp_nav_menu( array( 'theme_location' => 'post-social-media', 'container' => 'nav', 'container_class' => 'post-sm' ) );
        ?>
    </div>
</div>