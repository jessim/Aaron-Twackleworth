<?php get_header() ?>

<div id="everything_inside_css">

<div id="sidebar_css">
<?php get_sidebar(); ?>
</div>

<!-- #################### -->
<!-- BEGIN: LOOP, BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php 

if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> style="width : 440px;float : right;">
<h2 class="go_up_css"><?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>
<?php the_content(); ?>
</div>

<?php endwhile; ?>

</div>

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

<?php else:?>

<div id="sidebar_css">
<?php get_sidebar(); ?>
</div>

<div id="main_css">
<h2 class="go_up_css">Not Found</h2>
<?php _e("Sorry, but you are looking for something that isn't here.");?>
</div>

<?php endif;?>

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php get_footer() ?>