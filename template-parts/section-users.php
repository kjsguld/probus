<?php
// Get all users order by amount of posts
$allUsers = get_users('orderby=registered&order=DESC');
$users = array();

// Remove subscribers from the list as they won't be part of site team
foreach($allUsers as $currentUser){
	if(!in_array( 'subscriber', $currentUser->roles )){
		$users[] = $currentUser;
	}
}
?>
<!-- Users -->
<div class="container">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?>">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
		<div class="row">
	    <?php foreach($users as $user) { ?>
	      <div class="circ-item-wrapper col-xs-12 col-sm-6 col-md-4 col-lg-4">
	        <?php $args = array('class' => array('img-responsive', 'img-rounded')); ?>
	  			<?php echo get_avatar( $user->user_email, '400', null, $user->display_name, $args); ?>
	        <div class="">
	          <h3><?php echo $user->display_name; ?></h3>
	          <p><?php echo nl2br(get_user_meta($user->ID, 'description', true)); ?></p>
	        </div>
	      </div>
	    <?php } ?>
		</div>
  </section>
</div>
