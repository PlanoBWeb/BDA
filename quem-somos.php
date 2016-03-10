<?php

    include_once "configs/config.php";
    include_once "url.php";

    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Quem Somos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->assign("url", $url);
    $smarty->assign("permissao", $permissao);
    $smarty->display("quem-somos.html");

?>