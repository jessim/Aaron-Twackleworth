<div id="left_sidebar_supemi">
<ul style="list-style: none;">
<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
<?php dynamic_sidebar (1); ?>
<?php endif; ?>
</ul>
</div>

<div id="right_sidebar_supemi">
<ul style="list-style: none;">
<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
<?php dynamic_sidebar (2); ?>
<?php endif; ?>
</ul>
</div>