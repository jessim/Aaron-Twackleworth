<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title>&para; <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body>

<div id="header">

<div id="header_nav_supemi">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>

<td align="left">
You are here: <?php
if(function_exists('bcn_display'))
{
	bcn_display();
}
?>
</td>

<td align="right">
    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
         <input type="text" name="s" id="s" />
         <input type="submit" value="Where?" />
     </form>
</td>

</tr>
</table>

</div>

<h1 id="blog_title_supemi"><a href="<?php bloginfo('home') ?>/" rel="home"><?php bloginfo('name') ?></a></h1>
<?php bloginfo('description'); ?>

</div>