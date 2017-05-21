<?php

/* 
Theme Name: Web170 SP17 Section 02 ERM Theme
Them URI: https://github.com/ermartin1/WEB170_Spring17/tree/master/template
Author: Erin Martin 
Authot URI: erinrmartin.com
Description: Custom theme created for WEB 170 Spring 2017 Section 2 course.
Version: 1.0
*/


//register my menus array with key and value pairs
register_nav_menus(array('main-menu' => 'Main Menu', 'footer-menu' => 'Footer Menu'));


//register my sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//create post thumbnails
add_theme_support('post-thumbnails');


//create page excerpts
add_post_type_support('page', 'excerpt');


?>
