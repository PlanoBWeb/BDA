<?php

    include_once "configs/config.php";
    include_once "configs/funcoes.php";
    include_once "url.php";

    // XML do blog
    $link = 'http://bdasolutions.com.br/homologacao/blog/?feed=rss2';
	$dadosBlog = simplexml_load_file($link)->channel->item;

	$i=0;
	foreach($dadosBlog as $item){
		if ($i == 8) {
			break;
		}else{
			$arDados[$i]['titulo'] 		= limita_caracteres($item -> title, 75, false);
			$arDados[$i]['link'] 		= $item -> link;
			$arDados[$i]['img'] 		= stripImagemBlog($item -> description);
			$arDados[$i]['data'] 		= date('d-m-Y', strtotime($item -> pubDate));
			$arDados[$i]['descricao'] 	= strip_tags(limita_caracteres(stripDescricaoBlog($item -> description), 110, false));
			$i++;
		}
	}
	// XML do blog

	$smarty->assign("dadosBlog", $arDados);
    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Home");
    $smarty->display("index.html");

?>