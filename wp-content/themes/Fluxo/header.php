<?php
/**
 * The Theme Header Template
 *
 * Used to display the document <head> section and page header
 *
 * @package WordPress
 * @subpackage Fluxo
 * @since Fluxo 1.0
 */
 
?><!DOCTYPE html><!-- HTML5, for the win! -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- CSS Reset -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css">
 <!-- Global CSS for the page and tiles -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" type="text/css">
 <!-- Specific CSS for the tiles -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

 <!-- Specific CSS for the gallery -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueimp-gallery.min.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueimp-gallery-indicator.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blueimp-gallery-video.css" type="text/css">
<!-- Specific CSS for the menu -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/meanmenu.css" media="all" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.meanmenu.js"></script> 
<script type="text/javascript">
 $j=jQuery.noConflict();
  jQuery(document).ready(function () {


    	jQuery('header nav').meanmenu();
		
    });
  
</script>
<?php 
/**
 * Hook used to isert content in the document's <head> section.
 * Always have this before closing the <head> tag.
 */
wp_head(); ?>

</head>

<body>