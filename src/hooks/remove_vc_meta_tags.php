<?php

add_action('wp_head', 'remove_vc_metatag', 1);

function remove_vc_metatag() {
  if ( class_exists( 'Vc_Manager' ) ) {
    remove_action('wp_head', array(visual_composer(), 'addMetaData'));
  }
}