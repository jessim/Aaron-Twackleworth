<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


<title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/reset-all.css" media="screen" /> 

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />




<?php if ( is_singular() ) wp_enqueue_script( ‘comment-reply’ ); wp_head(); ?>

</head>

<body>

<div id="wrap">



<div id="header-wrapper">

<div id="header-left">header-left</div>

<div id="header-right">
<?php get_search_form(); ?> 
<div id="translation"> <script type="text/javascript" src="http://www.microsofttranslator.com/TranslatePageLink.aspx?pl=en"></script> </div>
</div>

</div>

	<div id="main">


<div>

<h1 id="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

<p id="tagline"><?php bloginfo('description'); ?> </p>

</div>














<div id="top-wrapper">

<div id="all-entry-wrapper">


<div id="posts">posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts posts</div>

<div id="date">date</div>


</div>

<div id="optsidebar">optsidebar optsidebar optsidebar optsidebar optsidebar optsidebar optsidebar optsidebar optsidebar</div>

</div>



















<div id="nav-wrapper">

<div id="nav-past"> <?php next_posts_link('&laquo; Past'); ?> </div>

<div id="nav-future"> <?php previous_posts_link('Future &raquo;'); ?> </div>

</div>

<div id="sidebar-wrapper">

<div id="sidebar1"> 


<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Sidebar 1') ) : ?>
<?php endif; ?>

</div>

<div id="sidebar2">

<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Sidebar 2') ) : ?>
<?php endif; ?>

</div>

</div>

	</div>

</div>

<div id="footer">footer footer footer footer footer footer</div>

<?php wp_footer(); ?>

</body>
</html>