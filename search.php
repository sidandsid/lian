<?php get_header(); ?>
    <div class="content-wrapper search-page">
        <h1 class="search-page__title"> <?php echo $wp_query->found_posts; ?>
            <?php _e( 'Search results found for', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h1>
        <?php get_search_form(); ?>
       <div class="post-wrapper search-page js-search-post-wrapper">
           <?php
           if ( have_posts() ) :  while ( have_posts() ) : the_post();
                   get_template_part( 'content-search', get_post_format() );
           endwhile;

           else : ?>
               <p class="search-page__text"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
               <?php
           endif;
           ?>
       </div>
    </div>
<?php get_footer(); ?>