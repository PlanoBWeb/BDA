<?php
	define("PATH_SERVIDOR","	E:/Home/planobweb2/Web/clientes/Bda/homologacao");
	define("PASTAPROJETO", strtolower("clientes/Bda/homologacao/"));

	$urlWWW = $_SERVER['SERVER_NAME'];
	$urlWWWFinal = explode('.', $urlWWW);
	if ($urlWWWFinal[0] == "www") {
		define("URL","http://www.planobweb.com.br/clientes/Bda/homologacao/");	
	}elseif ($urlWWWFinal[0] == "WWW") {
		define("URL","http://WWW.planobweb.com.br/clientes/Bda/homologacao/");	
	}
	else{
		define("URL","http://planobweb.com.br/clientes/Bda/homologacao/");
	}	
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) header('X-UA-Compatible: IE=edge,chrome=1'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<?php include (TEMPLATEPATH . '/cssUrmAmigavel.html'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>commom/css/estilo.css">
<link href="<?php echo URL; ?>commom/css/bootstrap.min.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
<div id="page" class="hfeed site">

	<?php include (TEMPLATEPATH . '/header.html'); ?>
	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
            <?php $layout_class = get_layout_class(); ?>
			<div class="row <?php echo $layout_class; ?>">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?>">