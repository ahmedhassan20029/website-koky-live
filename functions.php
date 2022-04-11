<?php
  // Include custom navwalker
  require_once('bs4navwalker.php');

  /* function to add custom styles */
  function kokylive_add_styles() {
      wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.rtl.min.css');
      wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover.css');
      wp_enqueue_style('splidestyle', get_template_directory_uri() . '/css/splide.min.css');
      wp_enqueue_style('flicon', get_template_directory_uri() . '/fonts/icon/font/flaticon.css');
      wp_enqueue_style('stylemin', get_template_directory_uri() . '/style.css');
  }

  /* function to add custom scripts */ 
  function kokylive_add_scripts() {
      wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
      wp_enqueue_script('splidem', get_template_directory_uri() . '/js/splide.min.js', array(), false, true);
      wp_enqueue_script('my_min_js', get_template_directory_uri() . '/js/min.js', array(), false, true);
      
  }

  /* add Navigation Bar mune */
  function kokylive_custom_menu() {
      register_nav_menus(array(
      'Bootstrap-menu' => 'Navigation Bar', //add location to list menu wordpress
      'footer-menu' => 'Footer Menu', //add location to list menu wordpress
      ));
  }

  // add function run menu
  function by_bootstrap_menu() {
    wp_nav_menu(array(
      'theme_location' => 'Bootstrap-menu',
      'menu_class'     => 'nav navbar-nav',
      'container'    => 'false',
      'depth'          =>  5,
      'fallback_cb'    => 'bs4navwalker::fallback',
      'walker'        => new bs4navwalker()
    )); 
  }

  // add the excerpt word length & read more
  function almshhad_excerpt($length) {
      return 40;
  }
  function almshhad_excerpt_change_dots($more) {
      return '';
  }

  //filters
  add_filter('excerpt_length','almshhad_excerpt');
  // filter change the [...] in post to '.'
  add_filter('excerpt_more','almshhad_excerpt_change_dots');



  // add action style css
  add_action('wp_enqueue_scripts', 'kokylive_add_styles');
  // add action script
  add_action('wp_enqueue_scripts', 'kokylive_add_scripts');
  /* add action custom mune */
  add_action('init','kokylive_custom_menu');



  // add theme image suport
  add_theme_support('post-thumbnails');