<?php get_header() ?>

<!-- #################### -->
<!-- EVERYTHING INSIDE -->
<!-- #################### -->

<div id="everything_inside_supemi">

<!-- #################### -->
<!-- TOP CONTENT -->
<!-- #################### -->

<div id="top_container_supemi">

<!-- #################### -->
<!-- BEGIN: LOOP -->
<!-- #################### -->

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> style="width : 500px;float : left;margin-left : 150px;margin-right : -150px;margin-bottom : 60px;">
<!-- #################### -->
<!-- BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->
<h2 class="go_up_supemi"><a href="<?php the_permalink()?>"><?php comments_number('(0)', '(1)', '(%)'); ?></a>&nbsp;&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('Edit'); ?></h2>
<ul id="meta_info_supemi">
<li>Author:  <?php the_author(); ?></li>
<li>Categories: <?php the_category(', ') ?></li>
<li><?php the_tags(); ?></li>
<li><?php comments_rss_link('Comments RSS for this post'); ?></li>
</ul>
<?php the_content(); ?>
<?php wp_link_pages(); ?>

<div class="go_bold_supemi">
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
</div> <!-- go_bold_supemi -->

<?php comments_template(); ?>

</div> <!-- blog_post_supemi -->

<div class="date_supemi">
<?php the_time('Y') ?><br />
<?php the_time('M') ?><br />
<?php the_time('j') ?><br />
<?php the_time('H:i') ?><br />
</div> <!-- date -->

<?php endwhile; ?>

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

</div> <!-- top_container_supemi -->

<div style="width : 500px;margin-right : 150px;margin-left : 150px;padding-bottom : 60px;">

<div class="navigation"><?php previous_post('%', 'Previous post: ', 'yes'); ?>&nbsp;&#124;&nbsp;Present?&nbsp;&#124;&nbsp;<?php next_post('%', 'Next post: ', 'yes'); ?></div>

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php else:?>
<h2>Not Found</h2>
<?php _e("Sorry, but you are looking for something that isn't here.");?>

</div>

<?php endif;?>

</div> <!-- navigation -->

<!-- #################### -->
<!-- BOTTOM CONTENT -->
<!-- #################### -->

<div id="bottom_container_supemi">

<?php get_sidebar(); ?>

</div> <!-- bottom_container_supemi -->

</div> <!-- everything_inside_supemi -->

<?php get_footer() ?>