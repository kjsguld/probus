<?php
// sub query to get POSTS that contains projects
$subQuery = new WP_Query([
  'post_type' => 'post',
  'category_name' => 'projects',
  'order' => 'ASC'
]);
?>
<!-- Projects -->
<div class="container">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?>">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <?php the_content(); ?>
    <div class="row">
      <?php while ($subQuery->have_posts()) : $subQuery->the_post(); //Here the active loop is changed to subQuery  ?>
        <article class="project col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div>
            <?php the_post_thumbnail(array(500,500), array('class' => 'img-responsive img-circle')); ?>
            <time class="pull-right"><?php the_date('Y'); ?></time>
          </div>
          <a href="<?php the_permalink(); ?>" >
            <h3><?php the_title(); ?></h3>
          </a>
        </article>
      <?php endwhile; // end subQuery ?>
    </div>
  </section>
</div>
