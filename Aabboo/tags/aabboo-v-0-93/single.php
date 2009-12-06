<?php get_header() ?>

<?php include( TEMPLATEPATH . '/constant1.php' ); ?>

		<?php if (have_posts()) : ?>  	

			<?php while (have_posts()) : the_post(); ?>

			<div class="post-container">

				<div class="date-css">

					<?php the_time('Y') ?><br />
					<?php the_time('M') ?><br />
					<?php the_time('j') ?><br />
					<?php the_time('H:i') ?>
				
				</div>

				<div <?php post_class(); ?> style="float : right;margin-bottom : 60px;margin-left : -150px;width : 500px;">

					<h2 class="top-align"><a href="<?php the_permalink()?>"><?php comments_number('(0)', '(1)', '(%)'); ?></a>&nbsp;&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>

<div id="meta-info">

Author:  <?php the_author(); ?><br />
Categories: <?php the_category(', ') ?><br />
<?php the_tags(); ?><br />
<?php comments_rss_link('Comments RSS for this post'); ?><br /><br />

</div>

<?php the_content(); ?>
<?php wp_link_pages(); ?>

<div class="boldnspace">
<?php if ( comments_open() && pings_open() ) {
// Both Comments and Pings are open ?>
&para;&nbsp;Comments: OPEN<br />
&para;&nbsp;Trackbacks: OPEN

<?php } elseif ( !comments_open() && pings_open() ) {
// Only Pings are Open ?>
&para;&nbsp;Comments: CLOSED<br />
&para;&nbsp;Trackbacks: OPEN

<?php } elseif ( comments_open() && !pings_open() ) {
// Comments are open, Pings are not ?>
&para;&nbsp;Comments: OPEN<br />
&para;&nbsp;Trackbacks: CLOSED

<?php } elseif ( !comments_open() && !pings_open() ) {
// Neither Comments, nor Pings are open ?>
&para;&nbsp;Comments: CLOSED<br />
&para;&nbsp;Trackbacks: CLOSED

<?php }; ?>
</div> <!-- boldnspace -->

<?php comments_template(); ?>
			
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

<?php include( TEMPLATEPATH . '/constant2.php' ); ?>

<?php get_footer() ?>