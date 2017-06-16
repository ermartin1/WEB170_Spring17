<?php get_header(); ?>

<!--start flexslider-->
<?php get_the_flexslider(); ?>

    
<!--end flexslider-->

    
<div id="container">
    
 <!--begin widget -->
<div id="widgets">
    <section class="widget-item">
<h3>About the Shop</h3>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?> <!--start of 1st loop-->
<?php the_content(''); ?> <!--home page content-->
<?php endwhile; endif; ?> <!--end of 1st loop-->
    </section> <!--end section 1 -->
  
    <section class="widget-item">  
<h3>Postings Galore</h3>
<ul>
<?php rewind_posts(); ?><!--stop 1st loop--> 
<?php query_posts(array('posts_per_page' => 4)); ?> <!--directions for loop-->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(' | '); ?>.</small>    
</li>
<?php endwhile; endif; ?>
</ul> 
    </section> <!--end section 2 -->
    
    <section class="widget-item">  
<h3>Thoughts A Plenty</h3>
   <p>Other Puff in Stuff</p> 
    </section> <!--end section 3 -->
    
</div><!--end widget -->
    
</div> <!--end container-->
    

    

		
<!-- flexslider script start -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!-- flexslider script end -->

  <!-- FlexSlider start --> 
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- FlexSlider end-->

    

  
   





<?php get_footer(); ?>