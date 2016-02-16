<?php

	define("PATH_SERVIDOR","	/home/storage/7/ef/ba/site1393210851/public_html/homologacao/");
	define("PASTAPROJETO", strtolower("homologacao/"));

	$urlWWW = $_SERVER['SERVER_NAME'];
	$urlWWWFinal = explode('.', $urlWWW);
	if ($urlWWWFinal[0] == "www") {
		define("URL","http://www.bdasolutions.com.br/homologacao/");	
	}elseif ($urlWWWFinal[0] == "WWW") {
		define("URL","http://WWW.bdasolutions.com.br/homologacao/");	
	}
	else{
		define("URL","http://bdasolutions.com.br/homologacao/");
	}		
/**
 * The Header for our theme.
 *
 * @package     Elegant WordPress theme
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<?php include (TEMPLATEPATH . '/cssUrmAmigavel.html'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>commom/css/estilo.css">
	<link href="<?php echo URL; ?>commom/css/bootstrap.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<div id="wrap" class="clr">

		<?php //get_template_part( 'partials/header/layout' ); ?>

		<?php //get_template_part( 'partials/home/slider' ); ?>
		<?php include (TEMPLATEPATH . '/header.html'); ?>
		<?php include (TEMPLATEPATH . '/breadcrumb.html'); ?>
		<div id="main" class="site-main container clr">