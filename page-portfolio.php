<?php get_header(); ?>
    <div class="banner portfolio">
        <img class="banner__img portfolio" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-2.jpg'; ?>" />
        <h1 class="banner__title portfolio">Latest projects</h1>
        <p class="banner__subtitle portfolio">We deliver quality</p>
    </div>

    <div class="content-wrapper portfolio-page">
        <nav class="portfolio-filter js-portfolio-filter">
            <button class="portfolio-filter__btn active" type="button" data-filter=".category-portfolio">All</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-logo">Logo</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-mobile-app">Mobile App</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-interior">Interior</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-web-design">Web Design</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-ui-ux">UI/UX</button>
            <button class="portfolio-filter__btn" type="button" data-filter=".category-branding">Branding</button>
        </nav>
        <div class="post-wrapper portfolio-page js-portfolio-post-wrapper">
            <?php
                $category_query = new WP_Query( array( 'category_name' => 'portfolio' ) );

                if ( $category_query->have_posts() ) : while ( $category_query->have_posts() ) : $category_query->the_post();
                    get_template_part( '/assets/lib/content-portfolio', get_post_format() );
                endwhile; endif;
            ?>
        </div>
    </div>
<?php get_footer(); ?>