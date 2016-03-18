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

	function urlFriendly($u0 = null, $u1 = null, $u2 = null, $u3 = null, $permissao){

		if ($u3) {
		    if ( array_key_exists($u0, $permissao) && array_key_exists($u1, $permissao[$u0]) && array_key_exists($u2, $permissao[$u0][$u1]) && array_key_exists($u3, $permissao[$u0][$u1][$u2]) ) {

		        $inicialUrl =  $permissao[$u0];
		        return $inicialUrl;

		        if (array_key_exists($u1, $permissao[$u0])) {
		            $primeiraUrl =  $permissao[$u0][$u1];
		            return $primeiraUrl;

		            if (array_key_exists($u2, $permissao[$u0][$u1])) {
		                $segundaUrl =  $permissao[$u0][$u1][$u2];
		                return $segundaUrl;

		                if (array_key_exists($u3, $permissao[$u0][$u1][$u2])) {
		                    $terceiraUrl = $permissao[$u0][$u1][$u2][$u3];
		                    return $terceiraUrl;
		                }

		            }

		        }
		    }else{
		        $inicialUrl['pagina'] = "erro";
		        return $inicialUrl;
		    }
		}elseif ($u2) {
		    if ( array_key_exists($u0, $permissao) && array_key_exists($u1, $permissao[$u0]) && array_key_exists($u2, $permissao[$u0][$u1]) ) {

		        $inicialUrl =  $permissao[$u0];
		        return $inicialUrl;

		        if (array_key_exists($u1, $permissao[$u0])) {
		            $primeiraUrl =  $permissao[$u0][$u1];
		            return $primeiraUrl;

		            if (array_key_exists($u2, $permissao[$u0][$u1])) {
		                $segundaUrl =  $permissao[$u0][$u1][$u2];
		                return $segundaUrl;
		            }

		        }
		    }else{
		        $inicialUrl['pagina'] = "erro";
		        return $inicialUrl;
		    }
		}elseif ($u1) {
		    if ( array_key_exists($u0, $permissao) && array_key_exists($u1, $permissao[$u0]) ) {

		        $inicialUrl =  $permissao[$u0];
		        return $inicialUrl;

		        if (array_key_exists($u1, $permissao[$u0])) {
		            $primeiraUrl =  $permissao[$u0][$u1];
		            return $primeiraUrl;
		        }
		    }else{
		        $inicialUrl['pagina'] = "erro";
		        return $inicialUrl;
		    }
		}elseif ($u0) {
		    if ( array_key_exists($u0, $permissao) ) {

		        $inicialUrl =  $permissao[$u0];
		        return $inicialUrl;
		    }else{
		        $inicialUrl['pagina'] = "erro";
		        return $inicialUrl;
		    }
		}
	}