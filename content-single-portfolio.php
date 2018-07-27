<div <?php post_class( array( 'post') ) ?> >
    <div class="post-content">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <span class="post-meta topic">
             <?php
                 if ( get_post_meta( $post->ID, 'Topic', true ) ) {
                     echo get_post_meta( $post->ID, 'Topic', true );
                 }
             ?>
        </span>
        <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        <?php the_content(); ?>
    </div>
    <div class="post-footer">
         <div class="post-meta role">
             <span class="post-meta__title">Role on project:</span>
             <?php
                 if ( get_post_meta( $post->ID, 'Role', true ) ) {
                     echo get_post_meta( $post->ID, 'Role', true );
                 }
             ?>
        </div>
        <div class="post-tags">
            <span class="post-tags__title">Tags:</span>
            <?php the_tags( '',', ' ); ?>
        </div>
        <div class="post-share">
            <span class="post-share__icon">
                <?php get_template_part('assets/svg/inline', 'share.svg'); ?>
                Share
            </span>
            <ul class="post-share__list">
                <li class="post-share__list-item facebook">
                    <?php get_template_part('assets/svg/inline', 'facebook.svg'); ?>
                </li>
                <li class="post-share__list-item google">
                    <?php get_template_part('assets/svg/inline', 'google.svg'); ?>
                </li>
                <li class="post-share__list-item twitter">
                    <?php get_template_part('assets/svg/inline', 'twitter.svg'); ?>
                </li>
                <li class="post-share__list-item linkedin">
                    <?php get_template_part('assets/svg/inline', 'linkedin.svg'); ?>
                </li>
                <li class="post-share__list-item dribbble">
                    <?php get_template_part('assets/svg/inline', 'dribbble.svg'); ?>
                </li>
                <li class="post-share__list-item pinterest">
                    <?php get_template_part('assets/svg/inline', 'pinterest.svg'); ?>
                </li>
                <li class="post-share__list-item instagram">
                    <?php get_template_part('assets/svg/inline', 'instagram.svg'); ?>
                </li>
            </ul>
        </div>
    </div>
</div>