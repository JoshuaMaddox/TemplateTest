<?php  
  /* Adding Bootstrap 3 to Theme  with the custom function theme_add_bootstrap_styles and the add_action function*/
  function theme_add_bootstrap_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
  }

  //uses wp_enqueue_scripts along with our custom function
  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap_styles' );
?>