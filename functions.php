<?php

define('_PATHTHEME', get_stylesheet_directory());

require_once(_PATHTHEME . "/framework/tema.customize.php");


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
?>