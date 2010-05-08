<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar 1',
'before_widget' => '',
'after_widget' => '<div class="widget-spacer"></div>',
'before_title' => '<h6 class="h6custom">',
'after_title' => '</h6><div class="widget-spacer"></div>',
));
register_sidebar(array('name'=>'Sidebar 2',
'before_widget' => '',
'after_widget' => '<div class="widget-spacer"></div>',
'before_title' => '<h6 class="h6custom">',
'after_title' => '</h6><div class="widget-spacer"></div>',
));
register_sidebar(array('name'=>'Optional sidebar',
'before_widget' => '',
'after_widget' => '<div class="widget-spacer"></div>',
'before_title' => '<h6 class="h6custom">',
'after_title' => '</h6><div class="widget-spacer"></div>',
));
?>