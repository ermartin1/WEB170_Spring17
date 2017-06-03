<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>

<!--meta data starts-->

<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="description" content="De` Cafe` is a Seattle based decaffeinated coffee shop and roastery. We carry many of the local coffee shops decaf coffees as well as our own branded coffee."/>
    
 <!--meta data ends-->   
    
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

<!-- start nav -->
    
<!--<nav> old nav
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
</nav> -->


    
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'navigation')); ?> 

<!-- end nav -->

    
<!-- start sub nav -->
<?php if (!(is_page())): ?> <!--on a page -->
<!--<h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h2>--> 
<ul class="sub-navigation-items"><?php if ($post->post_parent) { wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => (''))); 
 } 
    else { 
    wp_list_pages(array('child_of' => $post->ID, 'title_li' => ('')));
} ?> 
</ul>
    
<?php endif; ?>
    
  <?php if (!(is_page())): ?>
    <h2 class="sub-navigation-title">News &amp; Events</h2>
 <!-- <ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => (''))); ?></ul> -->
<?php endif; ?>
    
<!-- end sub nav -->
 
<header>

<!--<img id="mainpic" src="images/coffeebeans.png" alt="coffeepage"> -->


</header>    
    
<div id="container">