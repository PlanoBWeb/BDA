<?php

	function validaUrl($url){
		$urlCerta = strpos($url, "http://");
		if($urlCerta === false){
			$url = "http://". $url;
		}
		return $url;
	}

	// function limita_caracteres($texto, $limite, $quebra = true) {
	// 	$tamanho = strlen($texto);
		 
	// 	// Verifica se o tamanho do texto é menor ou igual ao limite
	// 	if ($tamanho <= $limite) {
	// 		$novo_texto = $texto;
	// 	// Se o tamanho do texto for maior que o limite
	// 	} else {
	// 	// Verifica a opção de quebrar o texto
	// 		if ($quebra == true) {
	// 		$novo_texto = trim(substr($texto, 0, $limite)).' 123...';
	// 		// Se não, corta $texto na última palavra antes do limite
	// 		} else {
	// 			// Localiza o útlimo espaço antes de $limite
	// 			$ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
	// 			// Corta o $texto até a posição localizada
	// 			$novo_texto = trim(substr($texto, 0, $ultimo_espaco)).' ...';
	// 		}
	// 	}
	// 	// Retorna o valor formatado
	// 	return $novo_texto;
	// }

	function limita_caracteres($texto, $limite, $quebra = true) {
		$tamanho = strlen($texto);
		 
		// Verifica se o tamanho do texto é menor ou igual ao limite
		if ($tamanho <= $limite) {
			$novo_texto = $texto;
		// Se o tamanho do texto for maior que o limite
		} else {
		// Verifica a opção de quebrar o texto
			if ($quebra == true) {
			$novo_texto = trim(substr($texto, 0, $limite)).' 123...';
			// Se não, corta $texto na última palavra antes do limite
			} else {
				// Localiza o útlimo espaço antes de $limite
				$ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
				// Corta o $texto até a posição localizada
				$novo_texto = trim(substr($texto, 0, $ultimo_espaco)).' ...';
			}
		}
		// Retorna o valor formatado
		return $novo_texto;
	}

	function stripImagemBlog($valor){
		$posInicioImg		= strpos($valor, '<div>');
		$posFinalImg		= strpos($valor, '</div>');
		$imgBlog			= substr($valor, $posInicioImg,  $posFinalImg);		
		return $imgBlog;
	}

	function stripDescricaoBlog($valor){
		$posInicioImg		= strpos($valor, '</div>');
		// $tamanhoString 		= strlen($valor);
		$txtDescricao		= substr($valor, $posInicioImg);		
		return $txtDescricao;
	}

?>