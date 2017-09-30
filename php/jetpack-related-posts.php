<?php
//Jetpack related posts
function jetpackme_related_posts_headline( $headline ) {
$headline = sprintf(
            '<h1>%s</h1>',
            esc_html( 'You will also love' )
            );
return $headline;
}
add_filter( 'jetpack_relatedposts_filter_headline', 'jetpackme_related_posts_headline' );

// remove related posts from bottom of page to customize location
function jetpackme_remove_rp() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );


// remove relate posts from custom post types
function ww_no_related_posts( $options ) {
    if ( !is_singular( 'post' ) ) {
        $options['enabled'] = false;
    }
    return $options;
}
add_filter( 'jetpack_relatedposts_filter_options', 'ww_no_related_posts' );
