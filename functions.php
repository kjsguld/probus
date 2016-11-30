<?php

//removeing admin header
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails', ['post', 'page']);

// start set_styles
function set_styles(){

  // Bootstrap Core CSS
  wp_enqueue_style(
    'bootstrap-css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
    [],
    null,
    'all'
  );
  wp_enqueue_style('bootstrap-css');

  // Base style
  wp_register_style(
    'style',
     get_template_directory_uri() . '/style.css',
    [bootstrap-css],
    null,
    'all'
  );
  wp_enqueue_style('style');

  wp_register_style(
    'master',
    get_template_directory_uri() . '/css/master.css',
    [],
    null,
    'all'
  );
  wp_enqueue_scripts('master');

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
