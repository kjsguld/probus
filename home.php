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
  $GLOBALS['sectionType'] =  get_post_meta(get_the_ID(), 'sectionType', true);
  switch ($GLOBALS['sectionType']) {
    case 'video':
      get_template_part('template-parts/section', 'video');
    break; // end Video
    case 'cite':
    get_template_part('template-parts/section', 'cite');
    break; // end Cite
    case 'featuredPerson':
    get_template_part('template-parts/section', 'featuredPerson');
    break; // end featuredPerson
    case 'linkedinFeed':
    get_template_part('template-parts/section', 'linkedinFeed');
    break; // end linkedIn
    case 'projects':
      get_template_part('template-parts/section', 'projects');
    break; // end projects
    case 'users':
    get_template_part('template-parts/section', 'users');
    break;
  } //end switch
  endwhile; ?>
  </div>
<?php get_footer(); ?>
