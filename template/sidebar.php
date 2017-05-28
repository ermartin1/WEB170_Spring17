 <!-- start sidebar -->
<div id="sidebar">
<!--start sub nav-->
<div id="sub-navigation" class="widget">
    
    
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
</div> <!--end sub nav-->
    
<!-- pull quote start-->  <!-- if custom quote exists, get mark up-->
<?php if (get_post_meta($post->ID, 'Quote', true)) :  ?>  
<div id="pull-quote" class="widget">

    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>    

<?php endif; ?>

<!-- pull quote end-->
    
    
<!-- dynamic sidebar start-->

<?php dynamic_sidebar(1); //calls my widgets?>
    
<?php dynamic_sidebar(2); //calls my widgets?>
    
<!-- dynamic sidebar end-->

</div>  

<!-- end sidebar --> 