<?php

    include_once "configs/config.php";
    include_once "url.php";

	$smarty->assign("dados", $retorno[1]);
    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Home");
    $smarty->display("index.html");

?>