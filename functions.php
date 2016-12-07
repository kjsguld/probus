<?php

//register_nav_menus???

//
function remove_footer_admin () {
  $link = 'https://www.youtube.com/channel/UCfQLVTJhlAs0QGaj3lYwGpw';
  echo 'Drevet af <a href="http://www.wordpress.org" target="_blank">WordPress</a> | WordPress Tutorials: <a href="'.$link.'" target="_blank">WPBeginner</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

//removeing admin header
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails', ['post', 'page']);

// start set_styles
function set_styles(){

  // // Bootstrap Core CSS
  // wp_register_style(
  //   'bootstrap-css',
  //   'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
  //   [],
  //   null,
  //   'all'
  // );
  // wp_enqueue_style('bootstrap-css');

  // Raleway Font
  wp_register_style(
    'raleway',
    'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900',
    [],
    null,
    'all'
  );
  wp_enqueue_style('raleway');

  wp_register_style(
    'master',
    get_template_directory_uri() . '/css/master.css',
    [],
    null,
    'all'
  );
  wp_enqueue_style('master');

  // Base style
  wp_register_style(
    'style',
     get_template_directory_uri() . '/style.css',
    [],
    null,
    'all'
  );
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'set_styles');
// End set_styles

// start set_scripts
function set_scripts(){

  // Google Analytics
  // wp_register_script(
  //   'googleAnalytics',
  //   get_template_directory_uri(). '/js/googleAnalytics.js',
  //   [],
  //   null,
  //   false
  // );
  // wp_enqueue_script('googleAnalytics');

  // Jquery in footer
  wp_register_script(
    'jquery',
    'https://code.jquery.com/jquery-3.1.1.min.js',
    [],
    null,
    true
  );
  wp_enqueue_script('jquery');

  // Bootstrap core javaScript in footer
  wp_register_script(
    'bootstrap-js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('bootstrap-js');

  // Offcanvas in footer
  wp_register_script(
    'offcanvas',
    get_template_directory_uri().'/js/offcanvas.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('offcanvas');

  // // Jasny CDN in footer
  // wp_register_script(
  //   'jasny',
  //   'https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js',
  //   [jquery],
  //   null,
  //   true
  // );
  // wp_enqueue_script('jasny');

  // App core
  wp_register_script(
    'core',
    get_template_directory_uri() . '/js/core.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('core');

}
add_action('wp_enqueue_scripts', 'set_scripts');
// End set_scripts
