<?php get_header() ?>

<div id="everything_inside_supemi">  		<!-- BEGIN: EVERYTHING INSIDE -->

	<div id="top_container_supemi">  	<!-- TOP CONTENT -->

		<div id="optionalsidebarcss">
			
			<?php include ('sidebar-optional.php'); ?>

		</div>

		<?php if (have_posts()) : ?>  	<!-- BEGIN: LOOP -->

			<?php while (have_posts()) : the_post(); ?>

			<div class="postcontainercss">

				<div class="date_supemi">

					<?php
					if($post->post_type == 'post') {
					echo the_time('Y')."<br />";
					echo the_time('M')."<br />";
					echo the_time('j')."<br />";
					echo the_time('H:i');
					} 
					else {print "Page";}
					?>
		
				</div>

				<div <?php post_class(); ?> style="float : right;margin-bottom : 60px;margin-left : -150px;width : 500px;">

						<!-- BEGIN: DIFFERENT CONTENT AS PER POST OR PAGE -->
	
					<h2 class="go_up_supemi"><a href="<?php the_permalink()?>"><?php comments_number('(0)', '(1)', '(%)'); ?></a>&nbsp;&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>

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

	<div id="bottom_container_supemi">	<!-- BOTTOM CONTENT -->

		<?php get_sidebar(); ?>

	</div>

</div>						<!-- END: EVERYTHING INSIDE -->

<?php get_footer() ?>