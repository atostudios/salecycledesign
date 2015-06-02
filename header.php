<!doctype html>

<!--
	HTML5 Reset: https://github.com/murtaugh/HTML5-Reset
	Free to use
-->

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title><?php wp_title(); ?></title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	
	<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="SaleCycle Design Guides" />
	
	<!-- Favicon -->
	<link rel="icon"  type="image/png" href="imgs/favicon.png">
	
	<!--  Mobile Viewport
	http://j.mp/mobileviewport & http://davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width (wrong for most sites)
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net
	<link rel="shortcut icon" href="favicon.ico" /> -->
	
	<!-- concatenate and minify for production -->
	<?php wp_head(); ?>
	
	
	


</head>


<body <?php body_class(); ?>>
	
	<div class="wrapper large-12">
	
	<h1><a  href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/imgs/SC-logo.svg"></a></h1>



	<header class="navbar large-12">
		
		<div class="burger">
	    <span></span>
	    <span></span>
	    <span></span>
	    </div>
		
		<nav role='navigation' class="main-nav" id="main-nav">
  			 <?php
    $defaults = array(
    	'container' => false,
    	'theme-location' => 'primary-menu'
    	);

    wp_nav_menu( $defaults );
    ?> 
		</nav>





	
	</header>