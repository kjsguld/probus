<!-- featuredPerson -->
<div id="<?php echo $GLOBALS['sectionType']; ?>" class="jumbotron" style="background: 50% 0 url(<?php echo the_post_thumbnail_url( 'full' ); ?>);">
  <div class="gradient">
    <div class="container">
      <div class="col-md-5">
        <h1 class="">
          <?php the_title(); ?>
          <?php echo nl2br(get_post_meta(get_the_ID(), 'title', true)); //finds person title and print it ?>
        </h1>
        <div class="hidden-xs hidden-sm">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container hidden-md hidden-lg">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?> col-md-8 col-md-offset-2">
    <?php the_content(); ?>
  </section>
</div>
