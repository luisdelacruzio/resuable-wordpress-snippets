<?php

function check_metadata() {
  global $post;
  $myvals = get_post_meta($post->ID);

  foreach($myvals as $key=>$val)
  {
      echo $key . ' : ' . $val[0] . '<br/>';
  }
}
add_shortcode('check_metadata','check_metadata');

?>
