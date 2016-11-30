<?php

$ogImage = 'http://';
if ( has_post_thumbnail() ) {
  $ogImage .= the_post_thumbnail_url();
} else {
  # get defualt
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('-', true, 'right') . bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <!-- Open Graph properties -->
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="<?php wp_title('-', true, 'right') . bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo get_bloginfo('url'); ?>" />
    <meta property="og:locale" content="<?php echo get_bloginfo('language'); ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <!-- wp_head -->
    <?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?>>
    <!-- nav start -->
    <nav class="navbar">

    </nav>
    <!-- nav end -->
