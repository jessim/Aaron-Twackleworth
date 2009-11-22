<?php get_header() ?>

<!-- #################### -->
<!-- EVERYTHING INSIDE -->
<!-- #################### -->

<div class="everything_inside_supemi">

<div style="font-size: xx-large; text-align:center;">

<p>404.</p>

<p>Page not found.</p>

<p>Perhaps you'd like to <a href="<?php get_bloginfo('home'); ?>">go home</a>?</p>

<p>Or search?</p>

    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
         <input type="text" name="s" id="s" />
         <input type="submit" value="Where?" />
     </form>

</div>

</div> <!-- everything_inside_supemi -->

<?php get_footer() ?>