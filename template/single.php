<?php get_header(); ?>


    
<div id ="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); //start of loop ?>
    <article id="post-<?php the_ID(); ?>" class="post"></article>
    
<h2><?php the_title(); //get the page or posting title ?></h2> 
    <small>Posted on <?php the_time('F j, Y'); //the time ?> by <?php the_author(); ?> in <?php the_category(' | '); ?>.</small>
    
    <?php the_post_thumbnail('large'); //get the featured image?>
    <h2><a href="<?php the_permalink(); ?>"> <!--<?php the_title(); ?> --></a> </h2>
    
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php if (is_404()) {echo 'error error danger Will Roger page not found!'; } ?>
<small>single.php</small>
</div> 
    
    

    
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