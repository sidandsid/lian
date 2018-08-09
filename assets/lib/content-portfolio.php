<div <?php post_class( array( 'post') ) ?> >
    <a class="post-featured-image" href="<?php echo get_permalink($post->ID);?>">
        <?php
            if ( has_post_thumbnail() ){
                the_post_thumbnail( 'full' );
            }
        ?>
    </a>
</div>
