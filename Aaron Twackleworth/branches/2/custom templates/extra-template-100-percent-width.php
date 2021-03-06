<?php
/*
Template Name: extra-template-100-percent-width
*/
?>

<?php get_header() ?>

<div id="content-container">  	<!-- BEGIN: EVERYTHING INSIDE -->

	<div id="100-percent-width-top-container">  	<!-- TOP CONTENT -->

		<div id="100-percent-width-optional-sidebar">
			
			<?php include ('sidebar-optional.php'); ?>

		</div>

							<!-- BEGIN: DIFFERENT CONTENT AS PER POST OR PAGE -->

							<!-- BEGIN: LOOP -->

		<?php if (have_posts()) : ?>  	

			<?php while (have_posts()) : the_post(); ?>

			<div class="100-percent-width-post-container">

				<div class="date-css">
		
					<!-- Nothing here, it's a page. -->
		
				</div>

				<div <?php post_class(); ?> style="float : right;width : 100%;">

					<h2 class="top-align"><a href="<?php the_permalink()?>"><?php comments_number('(0)', '(1)', '(%)'); ?></a>&nbsp;&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>

					<?php the_content(); ?>
					
					<?php wp_link_pages(); ?>
			
				</div>

			</div>
	
			<?php endwhile; ?>  	<!-- END: LOOP -->

	</div>

	<div class="navigation">

			<?php if (show_posts_nav()) : ?>

				<div id="pastnav">

					<?php next_posts_link('&larr;&nbsp;Past', 0) ?>

				</div>

				<div id="futurenav">
		
					<?php previous_posts_link('Future&nbsp;&rarr;', 0) ?>

				</div>
	
			<?php endif; ?>

	</div>					<!-- END: DIFFERENT CONTENT AS PER POST OR PAGE -->

			<?php else:?>

	<div style="margin-left : 150px;margin-right : 150px;width : 500px;padding-bottom : 60px;">

			<h2>Not Found</h2>

			<?php _e("Sorry, but you are looking for something that isn't here.");?>
	
	</div>

		<?php endif;?>

	<div id="bottom-container">	<!-- BOTTOM CONTENT -->

		<?php get_sidebar(); ?>

	</div>

</div>						<!-- END: EVERYTHING INSIDE -->

<?php get_footer() ?>