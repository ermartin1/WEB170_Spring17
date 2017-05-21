<?php get_header(); ?>


 <!-- Begin content-->   
<div id ="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <!--loop starts here -->
    
    <article class="post-excerpt"> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(' | '); ?>.</small>
        
    <a href="<?php the_permalink(); //link to the page or posting ?>"> 
<?php //the_excerpt(); blog post excerpt// ?> 
        <?php the_post_thumbnail('thumbnail'); ?> </a>
       
<p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More&nbsp;&raquo;</a></p>
    </article>     
        
    <?php endwhile; endif; ?>
    
<?php if (is_404()) {echo 'error error danger Will Roger page not found!'; } ?>
    
    <small>index.php</small>
</div> 
    
    
 <!-- end content--> 
    
<?php get_sidebar(); ?>
		
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

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




<?php get_footer(); ?>