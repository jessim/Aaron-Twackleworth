<?php 

// TWO SIDEBARS ON THE BOTTOM.

if ( function_exists ('register_sidebar')) { 
    register_sidebar ('1'); 
} 

if ( function_exists ('register_sidebar')) { 
    register_sidebar ('2'); 
} 

// ONE OPTIONAL SIDEBAR ON THE RIGHT.
// OFF BY DEFAULT, UNCOMMENT TO TURN BACK ON.

register_sidebar(array(
		'name' => 'sidebar-optional',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

// THE FOLLOWING CODE DISPLAYS NAVIGATION LINKS (PREVIOUS/NEXT) IF THERE IS A NEED FOR THEM.  
// SEE http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux FOR DETAILS.

function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

?>