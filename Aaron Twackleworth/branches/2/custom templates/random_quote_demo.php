<?php
/*
Template Name: random_quote_demo
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title(); ?> &para; <?php bloginfo('name'); ?> </title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body>

<div id="header_supemi">

<div id="subheader_supemi">

<div id="subheadernav_supemi">

<?php
if(function_exists('bcn_display'))
{
	bcn_display();
}
?>

</div>

<div id="subheaderforms_supemi">

<form method="get" action="<?php bloginfo('url'); ?>/">
<label class="hidden"><input type="text" value="<?php the_search_query(); ?>" name="s" />
<input type="submit" value="Where?" /></label>
</form>

</div>

</div>

<h1 id="blog_title_supemi"><a id="blog_title_text_supemi" href="<?php bloginfo('home') ?>/" rel="home"><?php bloginfo('name') ?></a></h1>

<div id="tagline_css"><?php include('onethousandseas_files/quote/display.php'); ?></div>

</div>

<!-- #################### -->
<!-- EVERYTHING INSIDE -->
<!-- #################### -->

<div id="everything_inside_supemi">

<!-- #################### -->
<!-- TOP CONTENT -->
<!-- #################### -->

<div id="top_container_supemi">

<div id="side-b">
<?php include ('sidebar-optional.php'); ?>
</div>

<!-- #################### -->
<!-- BEGIN: LOOP -->
<!-- #################### -->

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div id="grapevine">

<div class="date_supemi">
<?php the_time('Y') ?><br />
<?php the_time('M') ?><br />
<?php the_time('j') ?><br />
<?php the_time('H:i') ?><br />
</div>

<div <?php post_class(); ?> style="width : 500px;float : right;margin-left : -150px;margin-bottom : 60px;">
<!-- #################### -->
<!-- BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->
<h2 class="go_up_supemi"><a href="<?php the_permalink()?>"><?php comments_number('(0)', '(1)', '(%)'); ?></a>&nbsp;&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

</div>

<?php endwhile; ?>

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

</div>

<div class="navigation">
<?php if (show_posts_nav()) : ?>
<div id="pastnav"><?php next_posts_link('&larr;&nbsp;Past', 0) ?></div><div id="futurenav"><?php previous_posts_link('Future&nbsp;&rarr;', 0) ?></div>
<?php endif; ?>
</div>

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php else:?>

<div style="width : 500px;margin-left : 150px;margin-right : 150px;padding-bottom : 60px;">
<h2>Not Found</h2>
<?php _e("Sorry, but you are looking for something that isn't here.");?>
</div>

<?php endif;?>

<!-- #################### -->
<!-- BOTTOM CONTENT -->
<!-- #################### -->

<div id="bottom_container_supemi">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer() ?>