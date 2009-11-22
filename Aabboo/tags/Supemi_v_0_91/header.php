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

You are here: <?php
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

<?php bloginfo('description'); ?>

</div>