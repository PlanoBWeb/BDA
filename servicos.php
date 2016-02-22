<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços");
    $smarty->assign("pagina", $url['pagina']);
    if ($url['paginaHtml']) {
    	$smarty->display( $url['paginaHtml'] . ".html");
    }else{
    	$smarty->display("servicos.html");	
    }

?>