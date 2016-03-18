<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->assign("url", $url);
    $smarty->assign("permissao", $permissao);
    if ($url['paginaHtml']) {
    	$smarty->display( $url['paginaHtml'] . ".html");
    }else{
    	$smarty->display("servicos.html");	
    }

?>