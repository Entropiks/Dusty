<?php

// Dynamically adding title tags - requires wp_head in header.php
add_theme_support('title-tag');

function dusty_menus() {
  $menu_locations = array(
    'primary' => "Top Primary Menu",
    'footer' => "Footer Menu"
  );

  register_nav_menus($menu_locations);
}
add_action('init', 'dusty_menus');

// Load all styles function
function dusty_styles() {

  // Declare CSS version and append
  $version = wp_get_theme()->get( 'Version' );
  // Que up all stylesheets
  wp_enqueue_style( 'style', get_template_directory_uri() . "/style.css", array('style-bootstrap'), $version, all );
  wp_enqueue_style( 'style-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", all );
}
// Run function w/ enqueue
add_action( 'wp_enqueue_scripts', 'dusty_styles');


function dusty_scripts() {

  // Declare CSS version and append
  $version = wp_get_theme()->get( 'Version' );
  // Que up all js
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true);
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true);
}
add_action( 'wp_enqueue_scripts', 'dusty_scripts');

?>
