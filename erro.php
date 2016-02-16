<?php

    include_once "configs/config.php";
    include_once "url.php";

	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Página não existe");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("index.html");

?>