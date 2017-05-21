 <!-- start sidebar -->
<div id="sidebar">
<h2><?php if(is_page()) {echo get_the_title($post->post_parent); } ?></h2>
<ul>
<?php 
if(is_page()) {  //on a page  
    
    if($post->post_parent) {    //pages parent
        
        wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,));     
        //if the children have a parent list them

    } else { //on the parent page

        wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));

    } // 

} else { //if not page

        wp_list_categories(array('title_li' => 'News & Events',)); //list categories in page
    
} // end on page
?>
</ul>       
</div>  

<!-- end sidebar --> 