<div id="right_sidebar_supemi">
<ul>
<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
<?php dynamic_sidebar (1); ?>
<?php endif; ?>
</ul>
</div> <!-- right -->

<div id="left_sidebar_supemi">
<ul>
<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
<?php dynamic_sidebar (2); ?>
<?php endif; ?>
</ul>
</div> <!-- left -->