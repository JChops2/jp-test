<?php
/**
 * The Theme 2d Header Template
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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
 <!-- Specific CSS for the tiles -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css">


<?php 
/**
 * Hook used to isert content in the document's <head> section.
 * Always have this before closing the <head> tag.
 */
wp_head(); ?>

</head>

<body>