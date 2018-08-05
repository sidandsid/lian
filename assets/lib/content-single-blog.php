<div <?php post_class( array( 'post') ) ?> >
    <div class="post-content">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="post-details">
            <span class="post-author">by <?php the_author_posts_link(); ?></span>
            <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        </div>
        <div class="post-featured-image">
            <?php
                if ( has_post_thumbnail() ){
                    the_post_thumbnail( 'full' );
                }
            ?>
        </div>
        <?php the_content(); ?>
    </div>
</div>