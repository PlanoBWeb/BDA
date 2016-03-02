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
	$url['pagina'] = $url[0];

	$permissao['home'] 										= "Home";
	$permissao['quem-somos'] 								= "Quem Somos";
	$permissao['parceiros'] 								= "Parceiros";
	$permissao['clientes'] 									= "Clientes";
	$permissao['cases'] 									= "Cases";
	$permissao['blog'] 										= "Blog";
	$permissao['contato'] 									= "Contato";
	// Produtos SoftWare Dell
	$permissao['software'] 									= "Software";
	$permissao['dell'] 										= "Dell";
	$permissao['integracao-de-dados-e-aplicativos'] 		= "Integração de Dados e Aplicativos";
	$permissao['boomi-atomsphere'] 							= "Boom Atomsphere";
	$permissao['boomi-mdm'] 								= "Boomi MDM";
	$permissao['shareplex'] 								= "Sharplex";
	$permissao['gerenciamento-de-banco-de-dados'] 			= "Gerenciamento de Banco de Dados";
	$permissao['toad-development-suite-for-oracle'] 		= "Toad Development Suíte for Oracle";
	$permissao['toad-for-sql-server'] 						= "Toad for SQL";
	$permissao['toad-for-oracle'] 							= "Toad for Oracle";
	$permissao['toad-dba-suite-for-oracle'] 				= "Toad DBA Suíte for Oracle";
	$permissao['toad-for-sql-server'] 						= "Toad for SQL";
	$permissao['spotlight-on-sql-server-enterprise'] 		= "Spotlight on SQL Server Enterprise";
	$permissao['foglight-for-databases'] 					= "Foglight for DataBases";
	$permissao['business-intelligence'] 					= "Busines Intelligence";
	$permissao['toad-intelligence-central'] 				= "Toad Intelligence Central";
	$permissao['toad-data-point'] 							= "Data Point";
	$permissao['backup-e-replicacao-de-dados'] 	= "Backup e Replicação de Dados";
	$permissao['litespeed-for-sql'] 						= "Litespeed";
	$permissao['shareplex-connector-for-hadoop'] 			= "Shareplex Connector for Hadoop";
	$permissao['advanced-analytics'] 						= "Advanced Analytics";
	$permissao['statistica'] 								= "Statistica";
	// Produtos SoftWare tibco
	$permissao['tibco'] 									= "Tibco";
	$permissao['spotfire-desktop'] 							= "Spotfire Desktop";
	$permissao['spotfire-platform'] 						= "Tibco Spotfire Plataform";
	$permissao['spotfire-analytics-para-big-data'] 			= "Tibco Spotfire Analytics para Big Data";
	// Produtos SoftWare Microsoft
	$permissao['microsoft'] 								= "Microsoft";
	$permissao['azure-data-analytics'] 						= "Analise e Insights em Dados";
	$permissao['solucao-big-data-microsoft'] 				= "Solução Big Data Microsoft";
	$permissao['cortana-analytics'] 						= "Cortana Analytics";
	$permissao['power-bi'] 									= "Power Bi";
	// Soluções
	$permissao['solucoes'] 									= "Soluções";
	$permissao['gestao-de-banco-de-dados'] 					= "Gestão de Banco de Dados";
	$permissao['big-data-e-iot'] 							= "Soluções de Big Data";
	$permissao['gestao-de-avaliacao-educacional'] 			= "Gestão de avaliação educacional";
	$permissao['social-media'] 								= "Social Media";
	$permissao['gestao-de-analise-de-dados'] 				= "Gestão de Análise de Dados";
	$permissao['churn-analysis'] 							= "Churn Analysis";
	$permissao['fraud-detection'] 							= "Fraud Detection";
	$permissao['credit-scoring'] 							= "Credit Scoring";
	$permissao['customer-analytics'] 						= "Customes Analytics";
	$permissao['saude'] 									= "Saude";
	$permissao['dell-academic-center'] 						= "Dell Academic Center";
	$permissao['gestao-de-risco-de-credito'] 				= "Gestão de Risco e Crédito";
	$permissao['business-intelligence-analytics'] 			= "Business Intelligence & Analytics";
	$permissao['industria'] 								= "Indústria";
	$permissao['oil-e-gas'] 								= "OIL & Gás";
	$permissao['mineracao'] 								= "Mineração";
	$permissao['siderurgia'] 								= "Siderurgia";
	$permissao['automotivo'] 								= "Automotivo";
	$permissao['papel-e-celulose'] 							= "Papel e Celulose";
	$permissao['farmaceutico'] 								= "Farmaceutico";
	$permissao['servico'] 									= "Serviços";
	$permissao['servico-saude'] 							= "Saúde";
	$permissao['educacao'] 									= "Educação";
	$permissao['energia'] 									= "Energia";
	$permissao['marketing'] 								= "Marketing";
	$permissao['vendas'] 									= "Vendas";
	$permissao['financeiro'] 								= "Financeiro";
	$permissao['varejo'] 									= "Varejo";
	$permissao['logistica'] 								= "Logistica";
	$permissao['cosmeticos'] 								= "Cosmeticos";
	$permissao['governo'] 									= "Governo";
	
	// Serviços
	$permissao['servicos'] 									= "Serviços";
	$permissao['master-data-management'] 					= "Master Data Management";
	$permissao['data-intelligence'] 						= "Data Intelligence";
	$permissao['implementacao-e-suporte'] 					= "Implementação & Suporte";
	$permissao['consultoria-especializada'] 				= "Consultoria Especializada";
	$permissao['outsourcing-profissionais-de-ti'] 			= "Outsourcing Profissionais de TI";
	// Treinamentos
	$permissao['treinamentos'] 								= "Treinamentos";
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
