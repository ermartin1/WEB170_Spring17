<?php get_header(); ?>


<!-- Begin 404 Text -->    
<div id ="content">
<h2>404 Error</h2>
	<p>Dude... I don't know what to tell you.</p>
    <small>404.php</small>
</div> 
 
<!-- End 404 Text -->

    
    

    
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