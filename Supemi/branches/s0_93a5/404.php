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

<div id="error-404-nav">

You are here: <?php
if(function_exists('bcn_display'))
{
	bcn_display();
}
?>

</div> <!-- error-404-nav -->

<!-- #################### -->
<!-- EVERYTHING INSIDE -->
<!-- #################### -->

<div id="error-404">

<p>404.</p>

<p>Page not found.</p>

<p>Perhaps you'd like to go back to <a href="<?php bloginfo('home'); ?>"><?php bloginfo(); ?></a>?</p>

<p>Or search for what you want?</p>

    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
         <input type="text" name="s" id="s" />
         <input type="submit" value="Where?" />
     </form>

</div> <!-- error-404 -->

<div id="footer-css">
<p>Powered by: <a href="http://wordpress.org">WordPress</a> &#124; Theme: <a href="http://onethousandseas.org/you/supemi">Supemi</a> &#124; Validation: <a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></p>
</div>
<?php wp_footer() ?>
</body>
</html>