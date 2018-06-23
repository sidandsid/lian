<?php get_header(); ?>
<?php get_template_part( 'banner' ); ?>
    <div class="content-wrapper">
        <div class="post-wrapper single">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content-single', get_post_format() );
            endwhile; endif;
            ?>
        </div>
    </div>
<?php get_footer(); ?>