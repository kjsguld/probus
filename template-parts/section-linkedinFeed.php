<!-- linkedIn  -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/linkedinAjax.js"></script>
<div class="container-inverse">
  <div class="container">
    <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?>">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <div id="linkedinFeedContent">

      </div>
    </section>
  </div>
</div>
