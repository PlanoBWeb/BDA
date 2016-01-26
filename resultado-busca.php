<?php

    include_once "configs/config.php";
    include_once "url.php";
    // include_once "classes/Categoria.class.php";
    // $classCat 		= new Categoria();

    include_once "classes/Produto.class.php";
    $class 		= new Produto();

 //    // Menu lateral
	// $retornoMenuLat	= $classCat->Pesquisar(null);
	// if( $retornoMenuLat[0] )
	// {
	// 	$smarty->assign("mensagem", $retornoMenuLat[1]);
	// 	$smarty->assign("redir", $URL."home");
	// 	$smarty->display("mensagem.html");
	// 	exit();
	// }

	// if ($_POST['search']) {

	// 	$totalPorPagina = 10;
	// 	$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);

	// 	$parametro['busca'] 	= $_POST['search'];
	// 	$retornoPag = $class->Pesquisar($parametro, null, null);	
	// 	$retorno 	= $class->Pesquisar($parametro, $totalPorPagina, $_POST['p']);
	// 	if ($retornoPag[1]) {
	// 		echo '<ul class="carrega-busca-ajax">';
	// 		foreach ($retornoPag[1] as $key) {
	// 			echo '
	// 				<li class="selectProduto">'.$key["titulo"].'</li>
	// 			';
	// 		}	
	// 		echo '</ul>';
	// 	}
	// 	if( $retorno[0] )
	// 	{
	// 		$smarty->assign("mensagem", $retorno[1]);
	// 		$smarty->assign("redir", $URL."home");
	// 		$smarty->display("mensagem.html");
	// 		exit();
	// 	}

	// 	$totalDeRegistros = count($retornoPag[1]); 	
	// 	$conta = $totalDeRegistros / $totalPorPagina;
	// 	$totalPaginas = ceil($conta);

	// 	$Numpaginas 	= array();
	// 	for($j=0; $j <= $totalPaginas; $j++) { 
	// 		$Numpaginas[$j] = $j;
	// 	}
	// 	$ultimaPaginacao = end($Numpaginas);
	// }else{
	// 	$retorno[1] = "";
	// }

	if ($_POST['search']) {
		$parametro['busca'] 	= $_POST['search'];
		$retorno = $class->Busca($parametro);	

		if ($retorno[1]) {
		echo '<ul class="carrega-busca-ajax">';
		foreach ($retorno[1] as $key) {
			echo '
				<li class="selectProduto">'.$key["titulo"].'</li>
			';
		}	
		echo '</ul>';
		}
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", $URL."home");
			$smarty->display("mensagem.html");
			exit();
		}
	}else{
		$retorno[1] = "";
	}
	$totalDeRegistros = count($retorno[1]); 

	$smarty->assign("totalDeRegistros", $totalDeRegistros);  
	$smarty->assign("postBusca", $_POST['search']);  
	$smarty->assign("id", $url[1]);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("numPagina", $_POST['p']);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Resultado Busca");
    $smarty->assign("pagina", $url['pagina']);
    if (!$_POST['buscaAjax']) {
    	$smarty->display("resultado-busca.html");
	}
	exit;
?>