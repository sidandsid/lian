<?php get_header(); ?>
    <div class="banner portfolio-single">
        <img class="banner__img portfolio-single" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-2.jpg'; ?>" />
        <h1 class="banner__title portfolio-single">Latest projects</h1>
        <p class="banner__subtitle portfolio-single">We deliver quality</p>
    </div>
    <div class="content-wrapper portfolio-single">
        <ul class="post-nav">
            <li class="post-nav__item prev">
                <?php previous_post_link('%link', 'Previous', 'true'); ?>
            </li>
            <li class="post-nav__item next">
                <?php next_post_link('%link', 'Next', 'true'); ?>
            </li>
            <li class="post-nav__item all">
                <a href="<?php echo get_page_link( get_page_by_title( 'portfolio' )->ID ); ?>">Show all</a>
            </li>
        </ul>
        <div class="post-wrapper portfolio-single js-portfolio-single">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( '/assets/lib/content-single-portfolio', get_post_format() );
                endwhile; endif;
            ?>
        </div>
        <?php get_template_part( '/assets/lib/recommended-posts' );?>
    </div>
<?php get_footer(); ?>