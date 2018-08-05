<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="search-form__input" type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="search-form__btn" type="submit">
        <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
    </button>
</form>