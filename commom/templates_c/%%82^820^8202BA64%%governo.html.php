<?php /* Smarty version 2.6.12, created on 2016-03-30 15:07:48
         compiled from governo.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="" />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/cssUrmAmigavel.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>BDA</title>
 	<!-- Bootstrap -->
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid pd-none">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <!-- Banner -->
            <article class="banner-interna-faixa cor-linha-bn-solucoes pd-none">
                <img class="pull-right abs-left hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-solucoes1.jpg" alt="Governo" title="Governo"> 
                <div class="width-default">
                    <h1 class="titulo-faixa-interna">Governo</h1>
                </div>
                <img class="pull-right abs-right hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-solucoes2.jpg" alt="Governo" title="Governo">
            </article> 
            <!-- Banner -->
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>        
            <section class="conteudo-interna">
                <article class="width-default mg-bt-40">
                    <div class="col-xs-12 col-sm-12 col-md-12 pd-none pd-so-mob">
                        <div class="row pd-tp-30">
                            <div class="col-xs-12 pull-left max-int-solucoes-bola pd-none pd-so-mob" style="max-width:300px !Important">
                                <div class="row pd-none mg-bt-50 bloco-disable-interna">
                                    <div class="bola-tibco bola-dest">
                                        <img class="img-bola-center" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-governo.png" alt="Governo" title="Governo">
                                    </div>
                                    <div class="row">
                                        <h2 class="txt-destaques-home align-center mg-top--5">Governo</h2>
                                    </div>
                                </div>
                                <div class="width-solicite-trial pd-none pd-so-mob">         
                                    <img class="img-icon-link" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-interna-solucoes.png" alt="Solicite um Orçamento" title="Solicite um Orçamento">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
orcamento">
                                        <img class="img-icon-link-int" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-solucoes.png" alt="Solicite um Orçamento" title="Solicite um Orçamento">
                                    </a>
                                    <a class="nome-link-int pd-none" href="<?php echo $this->_tpl_vars['URL']; ?>
orcamento">
                                        <?php if ($this->_tpl_vars['segundaUrl']['txtsolicite']): ?>
                                            <?php echo $this->_tpl_vars['segundaUrl']['txtsolicite']; ?>

                                        <?php else: ?>
                                            Solicite um Orçamento
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 pd-none pd-so-mob">
                                <p class="txt-interna">
                                     O setor público enfrenta os mesmos desafios como empresas comerciais, mas muitas vezes com um maior critério das partes interessadas e supervisão regulatória. Eles precisam operar de forma rentável e responder à evolução das necessidades dos cidadãos, empresas e funcionários.<br><br>

                                    Além de fornecer a espinha dorsal da integração de algumas das mais imensas e complexas de sistemas de informação implementados por entidades comerciais, temos uma expertise e vivencia em soluções para todos os segmentos da organização e tipos de esferas (municipal, estadual ou federal).
                                </p><br><br>
                            </div>
                        </div>
                    </div>
                </article>
            </section>                       
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</body>
</html>