<?php get_header(); ?>
    <div class="home-slider js-home-slider">
        <div class="home-slide">
            <img class="home-slide__img" src="<?php echo get_template_directory_uri() . '/assets/images/home-img-1.jpg'; ?>" />
            <h1 class="home-slide__title">Lorem ipsum dolor sit amet, consectetur adipisicing</h1>
            <p class="home-slide__subtitle">Laudantium error, labore laborum nihil impedit</p>
        </div>
        <div class="home-slide">
            <img class="home-slide__img" src="<?php echo get_template_directory_uri() . '/assets/images/home-img-2.jpg'; ?>" />
            <h1 class="home-slide__title">Lian creative agency</h1>
            <p class="home-slide__subtitle">Minimal freelance portfolio</p>
        </div>
        <div class="home-slide">
            <img class="home-slide__img" src="<?php echo get_template_directory_uri() . '/assets/images/home-img-3.jpg'; ?>" />
            <h1 class="home-slide__title">Facilis doloribus earum inventore deserunt</h1>
            <p class="home-slide__subtitle"> Magni cumque dolorem reiciendis deserunt voluptate</p>
        </div>
    </div>

    <div class="content-wrapper home-page">
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