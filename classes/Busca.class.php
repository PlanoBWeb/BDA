<?php

include_once "configs/funcoes.php";

class Busca
{
	function Busca()
    {
		$this->entidade = "busca";
    }

	function pesquisar($post, $totalPorPagina, $pagina)
	{

		$query = "";

		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}

		if($post['busca'])
		{
			$valoresLike = explode(" ", $post['busca']);
			$totalValores = count($valoresLike);
			$totalValoresMenosUm = $totalValores-1;

			if ($totalValores == 1) {
				$query .= " AND B.titulo LIKE '%".utf8_decode($post['busca'])."%' ";
			}else{
				$and = array();
				if ($totalValores > 1) {
					for ($i=0; $i < $totalValores; $i++) { 
						$and[$i] = " LIKE '%".utf8_decode($valoresLike[$i])."%' ".($i <> $totalValoresMenosUm ? "AND B.titulo" : "");
					}
				}
				$andLike = implode('', $and);

				$query .= " AND B.titulo ".$andLike." ";	
			}
		}

		$retorno = array();

		$sql = "SELECT
					*
				FROM  
					busca B
				WHERE
					1 = 1 ".$query."
				ORDER BY
					B.titulo DESC
				".$sqlLimit." 
			";	

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Busca - Metodo = Busca";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 						= $rows;
			$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);
			$dados[$i]['tituloBusca']		= strip_tags(utf8_encode($rows['titulo']));
			$dados[$i]['subtitulo'] 		= utf8_encode($rows['subtitulo']);
			$dados[$i]['urlAmigavel'] 		= utf8_encode($rows['urlAmigavel']);
			$dados[$i]['descricao'] 		= utf8_encode($rows['descricao']);
			$dados[$i]['caminhoImagem'] 	= utf8_encode($rows['caminhoImagem']);
			$dados[$i]['tituloResumido']	= utf8_encode(limita_caracteres($rows['titulo'], 30, false));	
			$dados[$i]['tituloResumido']	= utf8_encode(limita_caracteres($rows['titulo'], 36, false));	
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}