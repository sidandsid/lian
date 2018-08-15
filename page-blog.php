<?php get_header(); ?>
    <div class="banner blog">
        <img class="banner__img blog" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-3.jpg'; ?>" />
        <h1 class="banner__title blog">News About Lian</h1>
        <p class="banner__subtitle blog">Latest News & Insights</p>
    </div>
    <div class="content-wrapper blog-page">
        <div class="post-wrapper blog-page js-blog-post-wrapper">
            <?php
                $category_query = new WP_Query( array( 'category_name' => 'blog' ) );

                if ( $category_query->have_posts() ) : while ( $category_query->have_posts() ) : $category_query->the_post();
                    get_template_part( '/assets/lib/content-blog', get_post_format() );
                endwhile; endif;
            ?>
            <button class="blog-load-btn js-blog-load-btn">load more</button>
        </div>
        <?php get_sidebar(); ?>
     </div>
<?php get_footer(); ?>