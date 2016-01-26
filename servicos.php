<?php

    include_once "configs/config.php";
    include_once "url.php";
    
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("servicos.html");

?>