<?php get_header(); ?>
<div id="content-wrapper">
  <?php while(have_posts()): the_post(); ?>
    <div class="jumbotron" style="background: url(<?php echo the_post_thumbnail_url( 'full' ); ?>);">
      <div class="container">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="container singular">
      <div class="row">
        <div class="col-xs-12">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-xs-12 col-sm-7">
          <?php the_content(); ?>
        </div>
        <div class="col-xs-12 col-sm-5 container-inverse">
          <h3>Fakta om projektet</h3>
          <?php echo nl2br(get_post_meta(get_the_ID(), 'facts', true)); //finds facts and ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
