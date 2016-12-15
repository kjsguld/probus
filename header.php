
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1  initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo wp_title('-', true, 'right');?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <!-- wp_head -->
    <?php wp_head(); ?>
    <!-- Open Graph properties -->
    <?php
    if ( has_post_thumbnail() ) {
      $ogImageWpArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "medium" );
      $ogImage .= $ogImageWpArray[0];
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
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="200" />
    <!-- favicon, apple-touch-icon etc. -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('url'); ?>/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo bloginfo('url'); ?>/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo bloginfo('url'); ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo bloginfo('url'); ?>/safari-pinned-tab.svg" color="#ca3f46">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('url'); ?>/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body  <?php body_class(); ?>>
    <!-- offcanvas nav start -->
    <nav id="offcanvasNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
      <?php wp_nav_menu( array( 'menu_class' => 'nav navmenu-nav', 'container' => '') ); ?>
    </nav>
    <!-- offcanvas nav end -->
    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <button type="button" id="navbar-toggle" class="navbar-toggle pull-left" data-toggle="offcanvas" data-target="#offcanvasNavmenu" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img alt="Probus logo" src="<?php echo get_template_directory_uri().'/assets/probus_logo.png'; ?>">
          </a>
        </div>
        <nav id="" class="hidden-xs" role="navigation">
          <?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav navbar-right', 'container' => '') ); ?>
        </nav>
      </div>
    </header>
