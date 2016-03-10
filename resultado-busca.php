<?php

    include_once "configs/config.php";
    include_once "url.php";

    include_once "classes/Busca.class.php";
    $class 		= new Busca();


	if ($_POST['search']) {
		$parametro['busca'] 	= $_POST['search'];

		$totalPorPagina = 10;
		$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);

		$retornoPag = $class->pesquisar($parametro, null, null);	
		$retorno	= $class->pesquisar($parametro, $totalPorPagina, $_POST['p']);

		if ($retorno[1]) {
			echo '<ul class="carrega-busca-ajax">';
			foreach ($retorno[1] as $key) {
				echo '
					<li class="selectProduto">'.$key["tituloBusca"].'</li>
				';
			}	
			echo '</ul>';

			$totalDeRegistros = count($retornoPag[1]); 	
			$conta = $totalDeRegistros / $totalPorPagina;
			$totalPaginas = ceil($conta);

			if ($totalPaginas >= 11) {
				$totalPaginas = 10;
			}

			$Numpaginas 	= array();
			for($j=0; $j <= $totalPaginas; $j++) { 
				$Numpaginas[$j] = $j;
			}
			$ultimaPaginacao = end($Numpaginas);
		}else{
			echo '<ul class="carrega-busca-ajax">
			
					<li class="selectProduto">Nenhum resultado encontrado</li>
				
			</ul>';
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

	$smarty->assign("pagPost", $_POST['p']);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("postBusca", $_POST['search']);  
	$smarty->assign("totalPaginas", $totalPaginas);

	$smarty->assign("permissao", $permissao);	

	$smarty->assign("dados", $retorno[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("url", $url);
    $smarty->assign("breadcrumb", "Resultado Busca");
    $smarty->assign("pagina", $url['pagina']);
    if (!$_POST['buscaAjax']) {
    	$smarty->display("resultado-busca.html");
	}
	exit;
?>