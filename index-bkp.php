<?php
	include_once "configs/config.php";

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
	
	// ----- Define a pagina ----- //
	if ($url[0] == "") {
		$url[0] = "home";
	}
	$url['pagina'] = $url[0];

	// ,
	// 	'nome' => array(
	// 		'urlPagina' 	=> "",
	// 		'breadcrumb' 	=> "",
	// 		'linkDownload' 	=> "",
	// 	),
	$permissao = array(
		'home' => array(
			'urlPagina' 	=> "home",
			'breadcrumb' 	=> "Home",
			'linkDownload'	=> "xpto",
		),
		'' => array(
			'urlPagina' 	=> "quem-somos",
			'breadcrumb' 	=> "Quem Somos",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "parceiros",
			'breadcrumb' 	=> "Parceiros",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "clientes",
			'breadcrumb' 	=> "Clientes",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "cases",
			'breadcrumb' 	=> "Cases",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "blog",
			'breadcrumb' 	=> "Blog",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "contato",
			'breadcrumb' 	=> "Contato",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "resultado-busca",
			'breadcrumb' 	=> "Resultado Busca",
			'linkDownload' 	=> "",
		),
		// Produtos SoftWare Dell
		'' => array(
			'urlPagina' 	=> "software",
			'breadcrumb' 	=> "Software",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "dell",
			'breadcrumb' 	=> "Dell",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "integracao-de-dados-e-aplicativos",
			'breadcrumb' 	=> "Integração de Dados e Aplicativos",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "boomi-atomsphere",
			'breadcrumb' 	=> "Boomi Atomsphere",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "boomi-mdm",
			'breadcrumb' 	=> "Boomi MDM",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "shareplex",
			'breadcrumb' 	=> "Sharplex",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "gerenciamento-de-banco-de-dados",
			'breadcrumb' 	=> "Gerenciamento de Banco de Dados",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-development-suite-for-oracle",
			'breadcrumb' 	=> "Toad Development Suíte for Oracle",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-for-sql-server",
			'breadcrumb' 	=> "Toad for SQL",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-for-oracle",
			'breadcrumb' 	=> "Toad for Oracle",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-dba-suite-for-oracle",
			'breadcrumb' 	=> "Toad DBA Suíte for Oracle",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-for-sql-server",
			'breadcrumb' 	=> "Toad for SQL",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "spotlight-on-sql-server-enterprise",
			'breadcrumb' 	=> "Spotlight on SQL Server Enterprise",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "foglight-for-databases",
			'breadcrumb' 	=> "Foglight for DataBases",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "business-intelligence",
			'breadcrumb' 	=> "Busines Intelligence",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-intelligence-central",
			'breadcrumb' 	=> "Toad Intelligence Central",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "toad-data-point",
			'breadcrumb' 	=> "Data Point",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "backup-e-replicacao-de-dados",
			'breadcrumb' 	=> "Backup e Replicação de Dados",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "litespeed-for-sql",
			'breadcrumb' 	=> "Litespeed",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "shareplex-connector-for-hadoop",
			'breadcrumb' 	=> "Shareplex Connector for Hadoop",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "advanced-analytics",
			'breadcrumb' 	=> "Advanced Analytics",
			'linkDownload' 	=> "",
		),
		'' => array(
			'urlPagina' 	=> "statistica",
			'breadcrumb' 	=> "Statistica",
			'linkDownload' 	=> "",
		),
		// Produtos SoftWare tibco
		'tibco' => array(
			'urlPagina' 	=> "tibco",
			'breadcrumb' 	=> "Tibco",
			'linkDownload' 	=> "",
		),
		'spotfire-desktop' => array(
			'urlPagina' 	=> "spotfire-desktop",
			'breadcrumb' 	=> "Spotfire Desktop",
			'linkDownload' 	=> "",
		),
		'spotfire-platform' => array(
			'urlPagina' 	=> "spotfire-platform",
			'breadcrumb' 	=> "Tibco Spotfire Plataform",
			'linkDownload' 	=> "",
		),
		'spotfire-analytics-para-big-data' => array(
			'urlPagina' 	=> "spotfire-analytics-para-big-data",
			'breadcrumb' 	=> "Tibco Spotfire Analytics para Big Data",
			'linkDownload' 	=> "",
		),
		// Produtos SoftWare Microsoft
		'microsoft' => array(
			'urlPagina' 	=> "microsoft",
			'breadcrumb' 	=> "Microsoft",
			'linkDownload' 	=> "",
		),
		'azure-data-analytics' => array(
			'urlPagina' 	=> "azure-data-analytics",
			'breadcrumb' 	=> "Analise e Insights em Dados",
			'linkDownload' 	=> "",
		),
		'solucao-big-data-microsoft' => array(
			'urlPagina' 	=> "solucao-big-data-microsoft",
			'breadcrumb' 	=> "Solução Big Data Microsoft",
			'linkDownload' 	=> "",
		),
		'cortana-analytics' => array(
			'urlPagina' 	=> "cortana-analytics",
			'breadcrumb' 	=> "Cortana Analytics",
			'linkDownload' 	=> "",
		),
		'power-bi' => array(
			'urlPagina' 	=> "power-bi",
			'breadcrumb' 	=> "Power Bi",
			'linkDownload' 	=> "",
		),
		// Soluções
		'solucoes' => array(
			'urlPagina' 	=> "solucoes",
			'breadcrumb' 	=> "Soluções",
			'linkDownload' 	=> "",
		),
		'gestao-de-banco-de-dados' => array(
			'urlPagina' 	=> "gestao-de-banco-de-dados",
			'breadcrumb' 	=> "Gestão de Banco de Dados",
			'linkDownload' 	=> "",
		),
		'big-data-e-iot' => array(
			'urlPagina' 	=> "big-data-e-iot",
			'breadcrumb' 	=> "Soluções de Big Data",
			'linkDownload' 	=> "",
		),
		'gestao-de-avaliacao-educacional' => array(
			'urlPagina' 	=> "gestao-de-avaliacao-educacional",
			'breadcrumb' 	=> "Gestão de avaliação educacional",
			'linkDownload' 	=> "",
		),
		'social-media' => array(
			'urlPagina' 	=> "social-media",
			'breadcrumb' 	=> "Social Media",
			'linkDownload' 	=> "",
		),
		'gestao-de-analise-de-dados' => array(
			'urlPagina' 	=> "gestao-de-analise-de-dados",
			'breadcrumb' 	=> "Gestão de Análise de Dados",
			'linkDownload' 	=> "",
		),
		'churn-analysis' => array(
			'urlPagina' 	=> "churn-analysis",
			'breadcrumb' 	=> "Churn Analysis",
			'linkDownload' 	=> "",
		),
		'fraud-detection' => array(
			'urlPagina' 	=> "fraud-detection",
			'breadcrumb' 	=> "Fraud Detection",
			'linkDownload' 	=> "",
		),
		'credit-scoring' => array(
			'urlPagina' 	=> "credit-scoring",
			'breadcrumb' 	=> "Credit Scoring",
			'linkDownload' 	=> "",
		),
		'customer-analytics' => array(
			'urlPagina' 	=> "customer-analytics",
			'breadcrumb' 	=> "Customes Analytics",
			'linkDownload' 	=> "",
		),
		'saude' => array(
			'urlPagina' 	=> "saude",
			'breadcrumb' 	=> "Saude",
			'linkDownload' 	=> "",
		),
		'dell-academic-center' => array(
			'urlPagina' 	=> "dell-academic-center",
			'breadcrumb' 	=> "Dell Academic Center",
			'linkDownload' 	=> "",
		),
		'gestao-de-risco-de-credito' => array(
			'urlPagina' 	=> "gestao-de-risco-de-credito",
			'breadcrumb' 	=> "Gestão de Risco e Crédito",
			'linkDownload' 	=> "",
		),
		'business-intelligence-analytics' => array(
			'urlPagina' 	=> "business-intelligence-analytics",
			'breadcrumb' 	=> "Business Intelligence & Analytics",
			'linkDownload' 	=> "",
		),
		'industria' => array(
			'urlPagina' 	=> "industria",
			'breadcrumb' 	=> "Indústria",
			'linkDownload' 	=> "",
		),
		'oil-e-gas' => array(
			'urlPagina' 	=> "oil-e-gas",
			'breadcrumb' 	=> "OIL & Gás",
			'linkDownload' 	=> "",
		),
		'mineracao' => array(
			'urlPagina' 	=> "mineracao",
			'breadcrumb' 	=> "Mineração",
			'linkDownload' 	=> "",
		),
		'siderurgia' => array(
			'urlPagina' 	=> "siderurgia",
			'breadcrumb' 	=> "Siderurgia",
			'linkDownload' 	=> "",
		),
		'automotivo' => array(
			'urlPagina' 	=> "automotivo",
			'breadcrumb' 	=> "Automotivo",
			'linkDownload' 	=> "",
		),
		'papel-e-celulose' => array(
			'urlPagina' 	=> "papel-e-celulose",
			'breadcrumb' 	=> "Papel e Celulose",
			'linkDownload' 	=> "",
		),
		'farmaceutico' => array(
			'urlPagina' 	=> "farmaceutico",
			'breadcrumb' 	=> "Farmaceutico",
			'linkDownload' 	=> "",
		),
		'servico' => array(
			'urlPagina' 	=> "servico",
			'breadcrumb' 	=> "Serviços",
			'linkDownload' 	=> "",
		),
		'servico-saude' => array(
			'urlPagina' 	=> "servico-saude",
			'breadcrumb' 	=> "Saúde",
			'linkDownload' 	=> "",
		),
		'educacao' => array(
			'urlPagina' 	=> "educacao",
			'breadcrumb' 	=> "Educação",
			'linkDownload' 	=> "",
		),
		'energia' => array(
			'urlPagina' 	=> "energia",
			'breadcrumb' 	=> "Energia",
			'linkDownload' 	=> "",
		),
		'marketing' => array(
			'urlPagina' 	=> "marketing",
			'breadcrumb' 	=> "Marketing",
			'linkDownload' 	=> "",
		),
		'vendas' => array(
			'urlPagina' 	=> "vendas",
			'breadcrumb' 	=> "Vendas",
			'linkDownload' 	=> "",
		),
		'financeiro' => array(
			'urlPagina' 	=> "financeiro",
			'breadcrumb' 	=> "Financeiro",
			'linkDownload' 	=> "",
		),
		'varejo' => array(
			'urlPagina' 	=> "varejo",
			'breadcrumb' 	=> "Varejo",
			'linkDownload' 	=> "",
		),
		'logistica' => array(
			'urlPagina' 	=> "logistica",
			'breadcrumb' 	=> "Logistica",
			'linkDownload' 	=> "",
		),
		'cosmeticos' => array(
			'urlPagina' 	=> "cosmeticos",
			'breadcrumb' 	=> "Cosmeticos",
			'linkDownload' 	=> "",
		),
		'governo' => array(
			'urlPagina' 	=> "governo",
			'breadcrumb' 	=> "Governo",
			'linkDownload' 	=> "",
		),
		// Serviços
		'servicos' => array(
			'urlPagina' 	=> "servicos",
			'breadcrumb' 	=> "Serviços",
			'linkDownload' 	=> "",
		),
		'master-data-management' => array(
			'urlPagina' 	=> "master-data-management",
			'breadcrumb' 	=> "Master Data Management",
			'linkDownload' 	=> "",
		),
		'data-intelligence' => array(
			'urlPagina' 	=> "data-intelligence",
			'breadcrumb' 	=> "Data Intelligence",
			'linkDownload' 	=> "",
		),
		'implementacao-e-suporte' => array(
			'urlPagina' 	=> "implementacao-e-suporte",
			'breadcrumb' 	=> "Implementação & Suporte",
			'linkDownload' 	=> "",
		),
		'consultoria-especializada' => array(
			'urlPagina' 	=> "consultoria-especializada",
			'breadcrumb' 	=> "Consultoria Especializada",
			'linkDownload' 	=> "",
		),
		'outsourcing-profissionais-de-ti' => array(
			'urlPagina' 	=> "outsourcing-profissionais-de-ti",
			'breadcrumb' 	=> "Outsourcing Profissionais de TI",
			'linkDownload' 	=> "",
		),
		'treinamentos' => array(
			'urlPagina' 	=> "treinamentos",
			'breadcrumb' 	=> "Treinamentos",
			'linkDownload' 	=> "",
		),
		// '' => array(
		// 	'urlPagina' 	=> "",
		// 	'breadcrumb' 	=> "",
		// 	'linkDownload' 	=> "",
		// ),
	);

	$path = "commom/templates/";

	// ----- Valida se existe páginas internas ----- //
	if (file_exists($path . $url[2] . ".html") && file_exists($path . $url[1] . ".html")) {		
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
		}
		// else{
		// 	$url['paginaHtml'] = "index";
		// }
	}
	// else{
	// 	$url['paginaHtml'] = "index";
	// }

	if ( array_key_exists($url[3], $permissao) ) {
		$dadosPag3 = $permissao[$url[3]];
	}

	if ( array_key_exists($url[2], $permissao) ) {
		$dadosPag2 = $permissao[$url[2]];
	}

	if ( array_key_exists($url[1], $permissao) ) {
		$dadosPag1 = $permissao[$url[1]];
	}	

	if ( array_key_exists($url[0], $permissao) ) {
		$dadosPag0 = $permissao[$url[0]];
	}	


	echo "<pre>";
	print_r($url);
	die();

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
