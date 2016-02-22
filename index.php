<?php
	include_once "configs/config.php";

	$url = strtolower($_SERVER['REQUEST_URI']);
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);

	// ----- Valida se so veio parametro na url ----- //
	if($url[0][0] == "?"){
		$url[0] = "home".$url[0];
	}

	// ----- Tratar se existi parametro, por exemplo se vier do google (?0000) ----- //
	for ($i=0; $i <= count($url)-1; $i++) { 
		if($url[$i])
		{
			$posInicio		= strpos($url[$i], '?');
			$priimeiraEtapa	= substr($url[$i], ($posInicio+strlen('?')));
			if(strpos($url[$i], '?'))
				$url[$i]	= substr($url[$i], 0, $posInicio);
		}
	}
	
	// ----- Define a pagina ----- //
	$url['pagina'] = $url[0];

	// Path e páginas das internas ----- //
	$pgInternas = array('gestao-de-analise-de-dados', 'gestao-de-banco-de-dados', 'integracao-de-dados', 'gerenciamento-de-banco-de-dados', 'business-intelligence', 'backup-e-replicacao-de-banco-de-dados', 'advanced-analytics', 'tibco', 'microsoft',  'big-data-e-iot', 'dell-academic-center', 'gestao-de-risco-de-credito', 'business-intelligence-analytics', 'master-data-management', 'data-intelligence', 'implementacao-e-suporte', 'consultoria-especializada', 'outsourcing-profissionais-de-ti');
	$path = "commom/templates/";

	// ----- Valida se existe páginas internas ----- //
	if (in_array($url[2], $pgInternas) || in_array($url[1], $pgInternas)) {		
		if ($url[3]) {
			if (file_exists($path . $url[3] . '.html')) {
				$url['paginaHtml'] = $url[3];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[2]) {
			if (file_exists($path . $url[2] . '.html')) {
				$url['paginaHtml'] = $url[2];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[1]) {
			if (file_exists($path . $url[1] . '.html')) {
				$url['paginaHtml'] = $url[1];
			}else{
				$url['paginaHtml'] = "index";
			}
		}else{
			$url['paginaHtml'] = "index";
		}
	}

	// ----- Faz include da página ----- //
	if ( $url['pagina'] != "blog" ) {
		if ($url['pagina'] == "" || $url['pagina'] == "index") {
			include "home.php";
		}elseif ($url['pagina'] == "admin") {
			include "admin/index.php";
		}else{
			if (file_exists($url['pagina'].".php")) {
				include $url['pagina'].".php";
			}else{
				include "erro.php";
			}
		}
	}
?>