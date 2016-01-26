<?php

    include_once "configs/config.php";
    include_once "url.php";
	include_once "classes/Categoria.class.php";
    $classCat 		= new Categoria();

    // Menu lateral
	$retornoMenuLat	= $classCat->Pesquisar(null);
	if( $retornoMenuLat[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLat[1]);
		$smarty->assign("redir", $URL."home");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Quem Somos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("quem-somos.html");

?>