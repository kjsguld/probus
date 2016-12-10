<?php
// Get all users order by amount of posts
$allUsers = get_users('orderby=post_count&order=DESC');

$users = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $currentUser)
{
	if(!in_array( 'subscriber', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}

?>
<div class="container">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>>

  </section>
</div>
