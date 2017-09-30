<?php

// Disable AutoEmbed
function disable_embeds_code_init() {
// Turn off oEmbed auto discovery.
add_filter( 'embed_oembed_discover', '__return_false' );
}

add_action( 'admin_init', 'disable_embeds_code_init', 9999 );

?>
