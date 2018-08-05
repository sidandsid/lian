<footer class="footer">
    <!-- Footer logo widget -->
    <div class="footer-logo">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer logo") ) : ?>
        <?php endif;?>
    </div>

    <!-- Footer social-media -->
    <div class="footer-sm">
        <?php
            wp_nav_menu( array( 'theme_location' => 'footer-sm', 'container' => 'nav', 'container_class' => 'footer-sm__nav' ) );
        ?>
    </div>

    <!-- Footer copyright -->
    <div class="footer-copyright">
        <p class="footer-copyright__text">© 2016 <a class="footer-copyright__link" href="#">Mulitix Theme</a> by ThemeForces. All Rights Reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>