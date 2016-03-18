<?php
	include_once "configs/config.php";
	include_once "configs/funcoes.php";
	$url = strtolower($_SERVER['REQUEST_URI']);
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);
	// ----- Valida se so veio parametro na url ----- //
	if($url[0][0] == "?"){
		$url[0] = "home".$url[0];
	}
	// ----- Tratar se existi parametro, por exemplo se vier do google (?0000) ----- //
	for ($i=0; $i <= count($url)-1; $i++) { 
		if($url[$i])
		{
			$posInicio		= strpos($url[$i], '?');
			$priimeiraEtapa	= substr($url[$i], ($posInicio+strlen('?')));
			if(strpos($url[$i], '?'))
				$url[$i]	= substr($url[$i], 0, $posInicio);
		}
	}

	$permissao = array(
	    'home' => array(
	        'urlPagina'     => "home",
	        'breadcrumb'    => "Home",
	        'linkDownload'  => "xpto",
	    ),
	    'quem-somos' => array(
	        'urlPagina'     => "quem-somos",
	        'breadcrumb'    => "Quem Somos",
	        'linkDownload'  => "",
	    ),
	    'software' => array(
	        'urlPagina'     => "software",
	        'breadcrumb'    => "Software",
	        'linkDownload'  => "xpto",
	        'dell' => array(
	            'urlPagina'     => "dell",
	            'breadcrumb'    => "dell",
	            'integracao-de-dados-e-aplicativos' => array(
	                'urlPagina'     => "integracao-de-dados-e-aplicativos",
	                'breadcrumb'    => "Integração De Dados E Aplicativos",
	                'boomi-atomsphere' => array(
	                    'urlPagina'     => "boomi-atomsphere",
	                    'breadcrumb'    => "Boomi Atomsphere",
	                ),
					'boomi-mdm' => array(
					 	'urlPagina'     => "boomi-mdm",
					 	'breadcrumb'    => "Boomi MDM",
					),
					'shareplex' => array(
					 	'urlPagina'     => "shareplex",
					 	'breadcrumb'    => "Sharplex",
					),
	            ),
	            'gerenciamento-de-banco-de-dados' => array(
				 	'urlPagina'     => "gerenciamento-de-banco-de-dados",
				 	'breadcrumb'    => "Gerenciamento de Banco de Dados",
				 	'toad-development-suite-for-oracle' => array(
					 	'urlPagina'     => "toad-development-suite-for-oracle",
					 	'breadcrumb'    => "Toad Development Suíte for Oracle",
					),
					'toad-for-sql-server' => array(
					 	'urlPagina'     => "toad-for-sql-server",
					 	'breadcrumb'    => "Toad for SQL",
					),
					'toad-for-oracle' => array(
					 	'urlPagina'     => "toad-for-oracle",
					 	'breadcrumb'    => "Toad for Oracle",
					),
					'toad-dba-suite-for-oracle' => array(
					 	'urlPagina'     => "toad-dba-suite-for-oracle",
					 	'breadcrumb'    => "Toad DBA Suíte for Oracle",
					),
					'toad-for-sql-server' => array(
					 	'urlPagina'     => "toad-for-sql-server",
					 	'breadcrumb'    => "Toad for SQL",
					),
					'spotlight-on-sql-server-enterprise' => array(
					 	'urlPagina'     => "spotlight-on-sql-server-enterprise",
					 	'breadcrumb'    => "Spotlight on SQL Server Enterprise",
					),
					'foglight-for-databases' => array(
					 	'urlPagina'     => "foglight-for-databases",
					 	'breadcrumb'    => "Foglight for DataBases",
					),
				),
				'business-intelligence' => array(
				 	'urlPagina'     => "business-intelligence",
				 	'breadcrumb'    => "Busines Intelligence",
				 	'toad-intelligence-central' => array(
					 	'urlPagina'     => "toad-intelligence-central",
					 	'breadcrumb'    => "Toad Intelligence Central",
					),
					'toad-data-point' => array(
					 	'urlPagina'     => "toad-data-point",
					 	'breadcrumb'    => "Data Point",
					),
					'boomi-atomsphere' => array(
					 	'urlPagina'     => "boomi-atomsphere",
					 	'breadcrumb'    => "Boomi Atomsphere",
					),
				),
				'backup-e-replicacao-de-dados' => array(
				 	'urlPagina'     => "backup-e-replicacao-de-dados",
				 	'breadcrumb'    => "Backup e Replicação de Dados",
				 	'litespeed-for-sql' => array(
					 	'urlPagina'     => "litespeed-for-sql",
					 	'breadcrumb'    => "Litespeed",
					),
					'shareplex' => array(
					 	'urlPagina'     => "shareplex",
					 	'breadcrumb'    => "Sharplex",
					),
					'shareplex-connector-for-hadoop' => array(
					 	'urlPagina'     => "shareplex-connector-for-hadoop",
					 	'breadcrumb'    => "Shareplex Connector for Hadoop",
					),
				),
				'advanced-analytics' => array(
				 	'urlPagina'     => "advanced-analytics",
				 	'breadcrumb'    => "Advanced Analytics",
				 	'statistica' => array(
					 	'urlPagina'     => "statistica",
					 	'breadcrumb'    => "Statistica",
					),
					'boomi-atomsphere' => array(
					 	'urlPagina'     => "boomi-atomsphere",
					 	'breadcrumb'    => "Boomi Atomsphere",
					),
				),
	        ),
			'tibco' => array(
			 	'urlPagina'     => "tibco",
			 	'breadcrumb'    => "Tibco",
			 	'spotfire-desktop' => array(
				 	'urlPagina'     => "spotfire-desktop",
				 	'breadcrumb'    => "Spotfire Desktop",
				),
				'spotfire-platform' => array(
				 	'urlPagina'     => "spotfire-platform",
				 	'breadcrumb'    => "Tibco Spotfire Plataform",
				),
				'spotfire-analytics-para-big-data' => array(
				 	'urlPagina'     => "spotfire-analytics-para-big-data",
				 	'breadcrumb'    => "Tibco Spotfire Analytics para Big Data",
				),
			),
	        'microsoft' => array(
	            'urlPagina'     => "microsoft",
	            'breadcrumb'    => "Microsoft",
	            'linkDownload'  => "",
	            'azure-data-analytics' => array(
				 	'urlPagina'     => "azure-data-analytics",
				 	'breadcrumb'    => "Analise e Insights em Dados",
				),
				'solucao-big-data-microsoft' => array(
				 	'urlPagina'     => "solucao-big-data-microsoft",
				 	'breadcrumb'    => "Solução Big Data Microsoft",
				),
				'cortana-analytics' => array(
				 	'urlPagina'     => "cortana-analytics",
				 	'breadcrumb'    => "Cortana Analytics",
				),
				'power-bi' => array(
				 	'urlPagina'     => "power-bi",
				 	'breadcrumb'    => "Power Bi",
				),
	        ),
	    ),
		'solucoes' => array(
		 	'urlPagina'     => "solucoes",
		 	'breadcrumb'    => "Soluções",
		 	'gestao-de-banco-de-dados' => array(
			 	'urlPagina'     => "gestao-de-banco-de-dados",
			 	'breadcrumb'    => "Gestão de Banco de Dados",
			),
			'big-data-e-iot' => array(
			 	'urlPagina'     => "big-data-e-iot",
			 	'breadcrumb'    => "Soluções de Big Data",
			),
			'gestao-de-avaliacao-educacional' => array(
			 	'urlPagina'     => "gestao-de-avaliacao-educacional",
			 	'breadcrumb'    => "Gestao de avaliaçao educacional",
			),
			'social-media' => array(
			 	'urlPagina'     => "social-media",
			 	'breadcrumb'    => "Social Media",
			),
			'gestao-de-analise-de-dados' => array(
			 	'urlPagina'     => "gestao-de-analise-de-dados",
			 	'breadcrumb'    => "Gestão de Análise de Dados",
			 	'churn-analysis' => array(
				 	'urlPagina'     => "churn-analysis",
				 	'breadcrumb'    => "Churn Analysis",
				),
				'fraud-detection' => array(
				 	'urlPagina'     => "fraud-detection",
				 	'breadcrumb'    => "Fraud Detection",
				),
				'credit-scoring' => array(
				 	'urlPagina'     => "credit-scoring",
				 	'breadcrumb'    => "Credit Scoring",
				),
				'customer-analytics' => array(
				 	'urlPagina'     => "customer-analytics",
				 	'breadcrumb'    => "Customes Analytics",
				),
				'saude' => array(
				 	'urlPagina'     => "saude",
				 	'breadcrumb'    => "Saude",
				),
			),
			'dell-academic-center' => array(
			 	'urlPagina'     => "dell-academic-center",
			 	'breadcrumb'    => "Dell Academic Center",
			),
			'gestao-de-risco-de-credito' => array(
			 	'urlPagina'     => "gestao-de-risco-de-credito",
			 	'breadcrumb'    => "Gestão de Risco e Crédito",
			),
			'business-intelligence-analytics' => array(
			 	'urlPagina'     => "business-intelligence-analytics",
			 	'breadcrumb'    => "Business Intelligence & Analytics",
			 	'industria' => array(
				 	'urlPagina'     => "industria",
				 	'breadcrumb'    => "Indústria",
				 	'oil-e-gas' => array(
					 	'urlPagina'     => "oil-e-gas",
					 	'breadcrumb'    => "OIL & Gás",
					),
					'mineracao' => array(
					 	'urlPagina'     => "mineracao",
					 	'breadcrumb'    => "Mineração",
					),
					'siderurgia' => array(
					 	'urlPagina'     => "siderurgia",
					 	'breadcrumb'    => "Siderurgia",
					),
					'automotivo' => array(
					 	'urlPagina'     => "automotivo",
					 	'breadcrumb'    => "Automotivo",
					),
					'papel-e-celulose' => array(
					 	'urlPagina'     => "papel-e-celulose",
					 	'breadcrumb'    => "Papel e Celulose",
					),
					'farmaceutico' => array(
					 	'urlPagina'     => "farmaceutico",
					 	'breadcrumb'    => "Farmaceutico",
					),
				),
				'servico' => array(
				 	'urlPagina'     => "servico",
				 	'breadcrumb'    => "Serviços",
				 	'servico-saude' => array(
					 	'urlPagina'     => "servico-saude",
					 	'breadcrumb'    => "Saúde",
					),
					'educacao' => array(
					 	'urlPagina'     => "educacao",
					 	'breadcrumb'    => "Educação",
					),
					'energia' => array(
					 	'urlPagina'     => "energia",
					 	'breadcrumb'    => "Energia",
					),
					'marketing' => array(
					 	'urlPagina'     => "marketing",
					 	'breadcrumb'    => "Marketing",
					),
					'vendas' => array(
					 	'urlPagina'     => "vendas",
					 	'breadcrumb'    => "Vendas",
					),
					'financeiro' => array(
					 	'urlPagina'     => "financeiro",
					 	'breadcrumb'    => "Financeiro",
					),
					'varejo' => array(
					 	'urlPagina'     => "varejo",
					 	'breadcrumb'    => "Varejo",
					),
					'logistica' => array(
					 	'urlPagina'     => "logistica",
					 	'breadcrumb'    => "Logistica",
					),
					'cosmeticos' => array(
					 	'urlPagina'     => "cosmeticos",
					 	'breadcrumb'    => "Cosmeticos",
					),
				),
				'governo' => array(
				 	'urlPagina'     => "governo",
				 	'breadcrumb'    => "Governo",
				),
				'' => array(
				 	'urlPagina'     => "",
				 	'breadcrumb'    => "",
				),
			),
		),

	);


	// 'software' => array(
	//  'urlPagina'     => "software",
	//  'breadcrumb'    => "Software",
	//  'linkDownload'  => "xpto",
	// ),

	$urlFriendly = urlFriendly($url[0], $url[1], $url[2], $url[3], $permissao);
	if (isset($urlFriendly['pagina'])) {
		$inicialUrl = $urlFriendly['pagina'];
	}else{
		$inicialUrl[] 	= $urlFriendly['urlPagina'];
		$inicialUrl[] 	= $urlFriendly['breadcrumb'];
        $primeiraUrl 	= $urlFriendly[$url[1]];
        $segundaUrl 	= $urlFriendly[$url[1]][$url[2]];
        $terceiraUrl 	= $urlFriendly[$url[1]][$url[2]][$url[3]];
	}

	// ----- Define a pagina ----- //
	$url['pagina'] = $url[0];
	
	// $permissao[''] 										= "";
	$path = "commom/templates/";
	// ----- Valida se existe páginas internas ----- //
	if (array_key_exists($url[2], $permissao) || array_key_exists($url[1], $permissao)) {		
		if ($url[3]) {
			if (file_exists($path . $url[3] . '.html')) {
				$url['paginaHtml'] = $url[3];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[2]) {
			if (file_exists($path . $url[2] . '.html')) {
				$url['paginaHtml'] = $url[2];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[1]) {
			if (file_exists($path . $url[1] . '.html')) {
				$url['paginaHtml'] = $url[1];
			}else{
				$url['paginaHtml'] = "index";
			}
		}else{
			$url['paginaHtml'] = "index";
		}
	}
	// ----- Faz include da página ----- //
	if ( $url['pagina'] != "blog" ) {
		if ($url['pagina'] == "" || $url['pagina'] == "index") {
			include "home.php";
		}elseif ($url['pagina'] == "admin") {
			include "admin/index.php";
		}else{
			if (file_exists($url['pagina'].".php")) {
				include $url['pagina'].".php";
			}else{
				include "erro.php";
			}
		}
	}