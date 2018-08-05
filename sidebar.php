<aside class="sidebar js-sidebar">
    <!--  Sidebar search  -->
    <div class="sidebar-search">
        <form class="sidebar-search__form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
           <input class="sidebar-search__input" type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
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