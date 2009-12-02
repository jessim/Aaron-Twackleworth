<?php get_header() ?>

<!-- #################### -->
<!-- EVERYTHING INSIDE -->
<!-- #################### -->

<div class="everything_inside_supemi">

<!-- #################### -->
<!-- TOP CONTENT -->
<!-- #################### -->

<div class="top_container_supemi">

<!-- #################### -->
<!-- BEGIN: LOOP -->
<!-- #################### -->

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> id="blog_post_supemi">
<!-- #################### -->
<!-- BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->
<h2 id="go_up_supemi">&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>
<?php the_content(); ?>
<div id="comments_down_supemi"><?php comments_template(); ?></div>
</div> <!-- blog_post_supemi -->

<?php endwhile; ?>

</div> <!-- top_container_supemi -->

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

<div class="navigation">

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php else:?>
<h2>Not Found</h2>
<?php _e("Sorry, but you are looking for something that isn't here.");?>

<?php endif;?>

</div> <!-- navigation -->

<!-- #################### -->
<!-- BOTTOM CONTENT -->
<!-- #################### -->

<div class="bottom_container_supemi">

<?php get_sidebar(); ?>

</div> <!-- bottom_container_supemi -->

</div> <!-- everything_inside_supemi -->

<?php get_footer() ?>