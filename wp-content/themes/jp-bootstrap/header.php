<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
<script>
$(document).ready(function(){
	
	$('.portfolio-th').animate({ opacity: 0 }, 0);
	$(".portfolio-th").each(function (i) {
	// store the item around for use in the 'timeout' function
	var $item = $(this); 
	// execute this function sometime later:
	setTimeout(function() { 
	  $item.animate({"opacity": 1,top: "15px",easing:"swing"}, 400);
	}, 50*i);
	// each element should animate half a second after the last one.
	});
	$("ul.sub-menu").parent().addClass("dropdown");
	$("ul.sub-menu").addClass("dropdown-menu");
	$("ul#main-menu li.dropdown a").addClass("dropdown-toggle");
	$("ul.sub-menu li a").removeClass("dropdown-toggle"); 
	$('.navbar .dropdown-toggle').append('<b class="caret"></b>');
	$('a.dropdown-toggle').attr('data-toggle', 'dropdown');
});
</script>

</head>

  <body <?php body_class(); ?>>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="container">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"  aria-label="JP Logo" width="40px" title="Jared Pereira.com" alt="Jared Pereira.com" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
     
    <?php
	 wp_nav_menu( array( 
	 'theme_location' => 'primary',
	 'menu' => 'main-menu', 
	 'menu_class' => 'nav navbar-nav', 
	 'menu_id' => 'main-menu' ) 
	 );
	 ?> 
     
    </div><!--/.nav-collapse -->
  </div>
</nav> 