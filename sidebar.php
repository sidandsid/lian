<aside class="sidebar js-sidebar">
    <!--  Sidebar search  -->
    <div class="sidebar-search">
        <form class="sidebar-search__form" action="<?php echo home_url( '/' ) ?>" method="get">
            <input class="sidebar-search__input" type="text" value="<?php echo get_search_query() ?>" placeholder="Search" name="search">
            <button class="sidebar-search__btn" type="submit">
                <?php get_template_part('assets/svg/inline', 'search.svg'); ?>
            </button>
        </form>
    </div>

    <!--  Sidebar recent posts  -->
    <div class="sidebar-posts">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar recent posts") ) : ?>
        <?php endif;?>
    </div>

    <!-- Sidebar tags widget -->
    <div class="sidebar-tags">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar tags") ) : ?>
        <?php endif;?>
    </div>

    <!--  Sidebar instagram widget  -->
    <div class="sidebar-instagram">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar instagram") ) : ?>
        <?php endif;?>
    </div>
</aside>