<?php

function register_meta_boxes() {
  foreach (glob(get_stylesheet_directory() . '/meta_boxes/*.box.php') as $type) {
    include $type;
  }
}
add_action('after_setup_theme', 'register_meta_boxes');


?>
