<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Adding svg sprite -->
    <?php get_template_part( 'assets/svg/sprite.svg' ); ?>

    <header class="header">
        <div class="header-logo">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header logo") ) : ?>
            <?php endif;?>
        </div>

        <div class="header-nav">
            <div class="header-nav__burger js-header-nav__burger">
                <span class="header-nav__burger-line js-header-nav__burger-line"></span>
            </div>
            <?php
                wp_nav_menu( array( 'theme_location' => 'header-navigation', 'container_class' => 'header-nav__items js-header-nav__items' ) );
            ?>
        </div>

        <div class="header-search">
            <div class="header-search__icon js-header-search__icon">
                <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
            </div>
            <form class="header-search__form js-header-search__form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input class="header-search__input" type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
                <button class="header-search__btn search" type="submit">
                    <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
                </button>
                <button class="header-search__btn close js-header-search__btn-close" type="button"></button>
            </form>
        </div>
    </header>