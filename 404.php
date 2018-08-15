<?php get_header(); ?>
    <div class="content-wrapper lost">
        <h1 class="lost-title">404 not found</h1>
        <p class="lost-subtitle">Sorry, looks like the page you're looking for doesn't exist.</p>
        <p class="lost-subtitle">Get back <a class="lost-link" href="<?php echo site_url(); ?>">home</a> or try search:</p>
        <?php get_search_form(); ?>
    </div>
<?php get_footer(); ?>