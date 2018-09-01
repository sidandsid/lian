<div <?php post_class( array( 'post') ) ?> >
    <a class="post-featured-image" href="<?php echo get_permalink($post->ID);?>">
        <?php
            if ( has_post_thumbnail() ){
                the_post_thumbnail( 'full' );
            }
        ?>
    </a>
    <div class="post-content">
        <span class="post-meta">
             <?php
                if ( get_post_meta( $post->ID, 'Topic', true ) ) {
                    echo get_post_meta( $post->ID, 'Topic', true );
                }
             ?>
        </span>
        <a class="post-title" href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a>
        <span class="post-author">
            <?php get_template_part('assets/svg/inline', 'user.svg'); ?>
            by
            <?php the_author_posts_link(); ?>
        </span>
        <a class="post-permalink" href="<?php echo get_permalink($post->ID);?>">
            <?php the_content(); ?>
        </a>
    </div>

    <div class="post-footer">
         <span class="post-date">
            <?php get_template_part('assets/svg/inline', 'calendar.svg'); ?>
            on
            <?php the_time( get_option( 'date_format' ) ); ?>
        </span>
        <a class="post-share" href="#">
            <?php get_template_part('assets/svg/inline', 'share.svg'); ?>
        </a>
        <a class="post-like" href="#">
            <?php get_template_part('assets/svg/inline', 'heart.svg'); ?>
        </a>
    </div>
</div>