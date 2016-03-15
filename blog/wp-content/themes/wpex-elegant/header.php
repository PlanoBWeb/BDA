<?php

	// define("PATH_SERVIDOR","	/home/storage/7/ef/ba/site1393210851/public_html/homologacao/");
	// define("PASTAPROJETO", strtolower("homologacao/"));

	// $urlWWW = $_SERVER['SERVER_NAME'];
	// $urlWWWFinal = explode('.', $urlWWW);
	// if ($urlWWWFinal[0] == "www") {
	// 	define("URL","http://www.bdasolutions.com.br/homologacao/");	
	// }elseif ($urlWWWFinal[0] == "WWW") {
	// 	define("URL","http://WWW.bdasolutions.com.br/homologacao/");	
	// }
	// else{
	// 	define("URL","http://bdasolutions.com.br/homologacao/");
	// }	

if( $_SERVER['SERVER_NAME'] == 'planobweb' || $_SERVER['SERVER_NAME'] == '192.168.0.105')
{
	define("db_host", 'localhost');
	define("db_user", 'root');
	define("db_pass", '');
	define("db_base", 'bda');
	define("PATH_SERVIDOR","C:/wamp/www/clientes/Bda/Web/");
	define("PASTAPROJETO", strtolower("clientes/Bda/Web/"));
	if ($_SERVER['SERVER_NAME'] == '192.168.0.105') {
		define("URL","http://192.168.0.105/clientes/Bda/Web/");
	}else{
		define("URL","http://planobweb/clientes/Bda/Web/");
	}
}
else
{
	/* DADOS Online  */
	define("PATH_SERVIDOR","	E:/Home/planobweb2/Web/clientes/Bda");
	define("PASTAPROJETO", strtolower("homologacao/"));
	define("db_host", '179.188.16.36');
	define("db_user", 'site13932108512');
	define("db_pass", 'bd9481aa');
	define("db_base", 'site13932108512');

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
}

//Acesso ao MyAdmin
$resultado=mysql_connect(db_host, db_user, db_pass);
if (!($resultado)) {
	echo "Erro ao conectar-se ao MySQL<br>";
}

//Acesso ao Banco de Dados
$resultado = mysql_select_db(db_base);
if (!($resultado)) {
	echo "Erro ao conectar-se ao Banco de Dados";
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
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">

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