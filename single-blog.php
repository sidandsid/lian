<?php get_header(); ?>
    <div class="banner blog-single">
        <img class="banner__img blog-single" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-3.jpg'; ?>" />
        <h1 class="banner__title blog-single">News about Lian</h1>
        <p class="banner__subtitle blog-single">Latest news & insights</p>
    </div>
    <div class="content-wrapper blog-single">
        <div class="post-wrapper blog-single">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( '/assets/lib/content-single-blog', get_post_format() );
                endwhile; endif;
            ?>
        </div>
        <?php comments_template( '/assets/lib/comment-form.php' ); ?>
    </div>
<?php get_footer(); ?>