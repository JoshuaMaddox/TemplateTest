<?php  

  /* Adding Bootstrap 3 to Theme */

  function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
  }

  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>