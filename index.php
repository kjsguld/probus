<?php
// Get pages for single page layout
$query = new WP_Query([
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
]);
?>
<?php get_header(); ?>
<div id="content-wrapper">
  <?php
  while ($query->have_posts()) : $query->the_post();
  ?>
    <div class="container">
      <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
      </section>
    </div>
    <?php
  endwhile; ?>
  </div>
<?php get_footer(); ?>
