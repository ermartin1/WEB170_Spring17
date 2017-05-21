<?php get_header(); ?>

<div class="box1">
<div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="http://wp.erinrmartin.com/wp-content/themes/template/images/amlate.jpg" alt="amlate"/>
              <p class="flex-caption">Start your day with a latte!</p>
  	    		</li>
			<li>
  	    	    <img src="http://wp.erinrmartin.com/wp-content/themes/template/images/bulkcoffee.png" alt="beans"/>
              <p class="flex-caption">Whole Bean Coffee Available</p>
  	    		</li>
  	    		<li>
  	    	    <img src="http://wp.erinrmartin.com/wp-content/themes/template/images/actionpour.png" alt="Pour Over"/>
              <p class="flex-caption">Stop in for a Pour Over</p>
  	    		</li>
  	    		<li>
  	    	    <img src="http://wp.erinrmartin.com/wp-content/themes/template/images/equipment2.png" alt="equipment"/>
              <p class="flex-caption">Let us help you get the most out of your beans!</p>
  	    		</li>
  	    		<li>
  	    	    <img src="http://wp.erinrmartin.com/wp-content/themes/template/images/seating.png" alt="seating"/>
              <p class="flex-caption">Lots of seating for your sipping pleasure!</p>
  	    		</li>
          </ul>
        </div> <!--end flexslider-->
</div> <!--end box 1-->
    
<div id="container">
    
 
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
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?>
</small>    
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