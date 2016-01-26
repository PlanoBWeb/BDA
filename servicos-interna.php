<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços Interna");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("servicos-interna.html");

?>