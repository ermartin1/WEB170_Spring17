<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script> 
<![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" > 
    
<link href="<?php bloginfo('template_directory'); ?>/font-awesome.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/accordian.css" type="text/css">
    
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/flexslider.css" type="text/css" media="screen"/>



<!--js for mobile nav-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script> <!-- end of js -->


<!-- Modernizr -->
  <script src="js/modernizr.js"></script>

  <style type="text/css">
  .flex-caption {
      width: 96%;
      padding: 2%;
      left: 0;
      bottom: 0;
      background:#bbbb77;
      color:rgba(255,238,204);
      font-size: 1.5em;
	  text-align:center;
      line-height:15px;
    }
    li.css a {
      border-radius: 0;
     }
  </style>

<!-- Begin WP Head Function -->
    
<?php wp_head(); ?>
    
<!-- End WP Head Function -->
    
    
</head>

<body <?php body_class(); ?>>
    
<div class="top">

<a href="index.php">
<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/mylogo.png" alt="logo">
</a>

</div>

<nav>
<ul class="nav"> 
<li><a href="index2.html">Home</a></li>
<li class="dropdown">
	<a href="index2.html" class="dropbtn">Coffee</a>
	<div class="dropdown-content">
		<a href="decaf.html">Decaf</a>
		<a href="caff.html">Caffeinated</a>
        <a href="caff.html">Specialty Brews</a>
	</div>
	</li>
	<li><a href="merch.html">Merchandise</a></li>
	<li><a href="brew.html">Brewing</a></li>
	<li><a href="news.html">News & Events</a></li>
	<li><a href="about.html">About</a></li>
</ul> 
</nav>

<!--++++start mobile navigation+++++-->
<button class="nav-button">Toggle Navigation</button>

<ul class="primary-nav">
	<li><a href="index2.html">Home</a></li>
		<li class="parent"><a href="index2.html">Coffee</a>
		<ul>
			<li><a href="decaf.html">Decaf</a></li>
			<li><a href="caff.html">Caffeinated</a></li>
		</ul>
			</li>
	<li><a href="merch.html">Merchandise</a></li>
	<li><a href="brew.html">Brewing</a></li>
	<li><a href="news.html">News & Events</a></li>
			<li><a href="about.html">About</a></li>
		</ul>
<!--++++end mobile navigation+++++-->	

<div id="container">


<main> 
    
<div id ="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<small>index.php</small>
</div>
    
</main>

 
		
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




</div> <!--end container-->

<div class="validator">
<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
&nbsp;&nbsp;
<a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>

</div> <!--end validator-->

<footer>

<div id="copyright">
<ul>
<li>Copyright 2016 &copy;</li>
<li>All Rights Reserved</li>
<li><a href="">wp.erinrmartin.com</a></li>
<li>Coffee Shop Address</li>
</ul>




</div> <!--end copyright-->

</footer>
    
<!-- Begin WP Footer Function -->
    
<?php wp_footer(); ?>
    
<!-- End WP Footer Function -->

</body>
</html>