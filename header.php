
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
            <img alt="Probus logo" src="<?php echo get_template_directory_uri().'/assets/probus_logo_small.png'; ?>">
          </a>
        </div>
        <nav id="" class="hidden-xs" role="navigation">
          <?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav navbar-right', 'container' => '') ); ?>
        </nav>
      </div>
    </header>
