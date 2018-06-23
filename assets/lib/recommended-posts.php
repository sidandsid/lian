<?php $orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);

if ($tags):
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $number_of_posts = 6; // number of posts to display
    $query = "
    SELECT ".$wpdb->posts.".*, COUNT(".$wpdb->posts.".ID) as q
    FROM ".$wpdb->posts." INNER JOIN ".$wpdb->term_relationships."
    ON (".$wpdb->posts.".ID = ".$wpdb->term_relationships.".object_id)
    WHERE ".$wpdb->posts.".ID NOT IN (".$post->ID.")
    AND ".$wpdb->term_relationships.".term_taxonomy_id IN (".implode(",",$tag_ids).")
    AND ".$wpdb->posts.".post_type = 'post'
    AND ".$wpdb->posts.".post_status = 'publish'
    GROUP BY ".$wpdb->posts.".ID
    ORDER BY q
    DESC LIMIT ".$number_of_posts."";
    $related_posts = $wpdb->get_results($query, OBJECT);
    if($related_posts): ?>
        <div class="post-recommended js-post-recommended">
            <h3 class="post-recommended__title">Recommended posts</h3>
            <?php foreach($related_posts as $post): ?>
                <?php setup_postdata($post); ?>
                <div class="post-recommended__item">
                    <a class="post-recommended__name" href="<?php the_permalink()?>">
                        <?php the_post_thumbnail(); ?><br>
                        <?php the_title(); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif;
endif;
$post = $orig_post;
wp_reset_query(); ?>