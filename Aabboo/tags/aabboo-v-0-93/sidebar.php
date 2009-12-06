<div id="left-sidebar">
<ul class="nobullets">
<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
<?php dynamic_sidebar (1); ?>
<?php endif; ?>
</ul>
</div>

<div id="right-sidebar">
<ul class="nobullets">
<?php if ( function_exists ( dynamic_sidebar(2) ) ) : ?>
<?php dynamic_sidebar (2); ?>
<?php endif; ?>
</ul>
</div>