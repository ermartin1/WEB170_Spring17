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


function template_widgets_init() {
//register my sidebar
register_sidebars(array(
    'name' => 'Main Sidebar', 
    'id'            => 'event_cal_right_1',
    'description' =>__('Appears on the right, upper sidebar'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebars(array(
    'name' => 'Secondary Lower Sidebar', 
    'id'            => 'posting_right_1',
    'description' =>__('Appears on the right,lower sidebar'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
//to give a sidebar a name, place after after_widget register_sidebar(array('name =>'type in name'));
}

add_action('widgets_init', 'template_widgets_init');


//create post thumbnails
add_theme_support('post-thumbnails');


//create page excerpts
add_post_type_support('page', 'excerpt');

//create shortcode
add_shortcode('flexslider', 'add_flexslider'); // for flexslider


//title tag function
function get_my_title_tag() {
    
    global $post;
    
    if (is_front_page() || is_home()) { //if on the front page
        
        bloginfo('description'); //get the site tag line
        
    }
      // || means or
    elseif (is_page() || is_single() ) { //for site pages or postings 
        
        echo get_the_title($post->ID); //get the title for the pages
       
    }
    
    else { //for everything else (404 or search)
        
        bloginfo('description'); //get the site tagline
        
    }
    
    if ($post->post_parent) { //for site parent page
        
        echo ' | '; //seperator for spacing
        echo get_the_title($post->post_parent); //get parent pg title
    }
    
    
    echo ' | '; //seperator for spacing
    bloginfo('name'); //get the site name
    echo ' | '; //seperator for spacing
    echo 'Seattle, WA.'; //location goes here
    
} //end of seo/ meta data function


//create flexslider gallery from attached images

function get_the_flexslider() {

    global $post; //don't forget your global variable

$attachments = get_children(array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order' ));

    if($attachments) { //if there are attachment images
    
        echo '<div class="flexslider">';
        echo '<ul class"slides">';
        
        foreach($attachments as $attachment) { //get images with caption
    
            echo '<li>';
            echo wp_get_attachment_image($attachment->ID, 'large');   
            echo '<p>'.get_post_field('post_excerpt', $attachment->ID).'</p>';
            echo '</li>';
    
        } //end foreach
        
        echo '</ul>';
        echo '</div>';
        
    } //end if

} //end flexslider function

?>