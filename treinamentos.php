<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Treinamentos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("treinamentos.html");

?>