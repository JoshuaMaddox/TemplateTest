<?php 

  if( ! function_exists ('cinderhosue_setup') ) :
    function cinderhouse_setup() {
      // Wordpress adds in the title tags
      add_theme_support( 'title-tag');
    }
  endif;
  //A hook that listens for the theme to be setup and then aftewards runs our custom function cinderhouse_setup
  add_action('after_setup_theme', 'cinderhouse_setup');

  /* ---- Register Menus ---- */

  function register_cinderhouse_menus() {
    register_nav_menus(
      array(
        'primary' => __('Main Menu')
      )
    );
  }
  //A hook that listens for initilasation and then runs our custom function register_cinderhouse_menus
  add_action('init', 'register_cinderhouse_menus');

  /* Adding Bootstrap 3 to Theme with the custom function cinderhouse_add_styles and the add_action function*/
  function cinderhouse_add_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
  }

  //A hook that listens for us to start using our scripts and then runs the custom function cinderhouse_add_styles
  add_action( 'wp_enqueue_scripts', 'cinderhouse_add_styles' );