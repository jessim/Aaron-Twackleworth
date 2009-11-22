<?php get_header() ?>

<div id="everything_inside_css">

<div id="sidebar_css">
<?php get_sidebar(); ?>
</div>

<!-- #################### -->
<!-- BEGIN: LOOP, BEGIN: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php 

query_posts('posts_per_page=1');

if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div <?php post_class(); ?> id="main_css">
<h2 class="go_up_css"><?php the_title(); ?>&nbsp;<?php edit_post_link('(Edit)'); ?></h2>
<?php the_content(); ?>
</div>

<?php endwhile; ?>

<!-- #################### -->
<!-- END: LOOP -->
<!-- #################### -->

<?php endif;?>

</div>

<!-- #################### -->
<!-- END: DIFFERENT CONTENT FOR DIFFERENT TEMPLATES -->
<!-- #################### -->

<?php get_footer() ?>