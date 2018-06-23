<?php get_header(); ?>
    <div class="content-wrapper home-page">
        <div class="post-wrapper home-page">
            <?php
            $category_query = new WP_Query( array( 'category_name' => 'portfolio' ) );

            if ( $category_query->have_posts() ) : while ( $category_query->have_posts() ) : $category_query->the_post();
                get_template_part( 'content-portfolio', get_post_format() );
            endwhile; endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>