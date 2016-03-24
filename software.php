<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Software");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->assign("url", $url);
    $smarty->assign("permissao", $permissao);
    $smarty->assign("inicialUrl", $inicialUrl);
    $smarty->assign("primeiraUrl", $primeiraUrl);
    $smarty->assign("segundaUrl", $segundaUrl);
    $smarty->assign("terceiraUrl", $terceiraUrl);
    
    if ($url['paginaHtml']) {
    	$smarty->display( $url['paginaHtml'] . ".html");
    }else{
    	$smarty->display("software.html");	
    }

?>