<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />

<title><?php bloginfo('name'); ?></title>





<?php if ( is_singular() ) wp_enqueue_script( ‘comment-reply’ ); wp_head(); ?>

</head>

<body>

<div id="wrap">



<div id="header-wrapper">

	<div id="header-left">header-left</div>

	<div id="header-right">

		<div id="translation"> <script type="text/javascript" src="http://www.microsofttranslator.com/TranslatePageLink.aspx?pl=en"></script> </div> 

		<?php get_search_form(); ?> 

	</div>

</div>

	<div id="main">


<div id="title">

<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

<p id="tagline"><?php bloginfo('description'); ?> </p>

</div>














<div id="top-wrapper">

<div id="all-entry-wrapper">
<?php 
if ( is_archive() ) {query_posts($query_string . '&showposts=-1'); }

if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div id="posts">

<h2 id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php comments_number('0', '1', '%'); ?></a> &para; <?php the_title(); ?> <?php edit_post_link('(Edit)'); ?></h2> 

<p class="post-meta">By: <?php the_author_posts_link(); ?> &#8734; <?php the_category(', ') ?> <?php the_tags('&#8734; ',', ',''); ?> </p>

<div class="entry">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<!--
<?php trackback_rdf(); ?>
-->

<?php comments_template(); ?>
</div>

<div id="date">
			<?php the_time('Y') ?> <br />
			<?php the_time('M') ?> <br />
			<?php the_time('j') ?> </div>

<?php endwhile; ?>


<?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">
<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

			  <?php endif; ?>

</div>

<div id="optsidebar">

<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Optional sidebar') ) : ?>
<?php endif; ?>

</div>

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