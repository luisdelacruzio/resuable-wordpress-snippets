<?php

function add_additional_image_sizes() {
  add_image_size( 'featured-alt-small', 640, 400, true ); // name, width, height, crop
  add_image_size( 'featured-alt-medium', 1280, 600, true );
  add_image_size( 'featured-alt-large', 1440, 600, true );
  add_image_size( 'featured-alt-xlarge', 1920, 600, true );
}
add_action('after_setup_theme','add_additional_image_sizes');

?>
