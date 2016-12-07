
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
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
      <ul class="nav navmenu-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu navmenu-nav" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- offcanvas nav end -->
    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
