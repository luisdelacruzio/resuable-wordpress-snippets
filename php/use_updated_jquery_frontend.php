<?php


function use_google_jquery() {
  if ( !is_admin() ) wp_deregister_script('jquery');
  wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
}

add_action('init','use_google_jquery');
