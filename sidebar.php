<aside class="sidebar">
    <!--  Sidebar search  -->
    <div class="sidebar-search">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar search") ) : ?>
        <?php endif;?>
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