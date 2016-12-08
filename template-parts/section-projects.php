<div class="container">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <?php the_content(); ?>
  </section>
</div>
