<?php

// Data no passado
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Sempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

session_start();

require $path.'libs/Smarty.class.php';

$smarty = new Smarty;
/*
$smarty->compile_check = false;
$smarty->caching = false;
$smarty->debugging = false;
*/

/* MyADMIN - http://phpmyadmin.locaweb.com.br/ */
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
define("TITULO","BDA");

?>