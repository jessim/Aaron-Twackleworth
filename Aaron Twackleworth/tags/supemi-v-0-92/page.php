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

<div <?php post_class(); ?> style="width : 500px;float : right;margin-right : 150px;margin-left : -150px;margin-bottom : 60px;">
<!-- #################### -->
<!-- BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->
<h2 class="go_up_supemi">&para;&nbsp;<?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php comments_template(); ?>
</div> <!-- blog_post_supemi -->

<?php endwhile; ?>

</div>

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php else:?>

<div class="navigation">
<h2>Not Found</h2>
<?php _e("Sorry, but you are looking for something that isn't here.");?>
</div>

<?php endif;?>

<!-- #################### -->
<!-- BOTTOM CONTENT -->
<!-- #################### -->

<div id="bottom_container_supemi">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer() ?>