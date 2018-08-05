<?php get_header(); ?>
    <div class="content-wrapper page">
        <div class="post-wrapper page">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( '/assets/lib/content-search', get_post_format() );
                endwhile; endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>