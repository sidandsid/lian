<div <?php post_class( array( 'post') ) ?> >
    <div class="post-featured-image">
        <?php
        if ( has_post_thumbnail() ){
            the_post_thumbnail( 'full' );
            }
        ?>
    </div>
    <div class="post-content">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <span class="post-category"><?php the_category(', '); ?></span>
        <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        <?php the_content(); ?>
        <p class="post-tags"><?php the_tags( '',', ' ); ?></p>
    </div>
    <?php get_template_part( '/assets/lib/recommended-posts' );?>
</div>