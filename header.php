
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1  initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo wp_title('-', true, 'right') . bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <!-- wp_head -->
    <?php wp_head(); ?>
    <!-- Open Graph properties -->
    <?php
    $ogImage = 'http://';
    if ( has_post_thumbnail() ) {
      $ogImage .= the_post_thumbnail_url('large');
    } else {
      # get defualt
    }
    ?>
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:title" content="<?php wp_title('-', true, 'right'); ?>" />
    <meta property="og:description" content="<?php echo bloginfo('description'); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo bloginfo('url'); ?>" />
    <meta property="og:locale" content="<?php echo bloginfo('language'); ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
  </head>
  <body  <?php body_class(); ?>>
    <!-- offcanvas nav start -->
    <nav id="offcanvasNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
      <ul class="nav navmenu-nav">
        <li class="active"><a href="#">Nyheder</a></li>
        <li><a href="#">Projekter</a></li>
        <li><a href="#">Hvem er vi</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
    </nav>
    <!-- offcanvas nav end -->
    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle pull-left" data-toggle="offcanvas" data-target="#offcanvasNavmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="Probus logo" src="<?php echo get_template_directory_uri().'/asserts/probus_logo_small.png'; ?>">
        </a>
      </div>
    </div>
