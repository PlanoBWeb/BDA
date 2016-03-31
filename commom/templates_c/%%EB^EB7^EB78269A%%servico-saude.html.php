<?php /* Smarty version 2.6.12, created on 2016-03-30 16:29:13
         compiled from servico-saude.html */ ?>
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
commom/img/bg-solucoes1.jpg" alt="Saúde" title="Saúde"> 
                <div class="width-default">
                    <h1 class="titulo-faixa-interna">Saúde</h1>
                </div>
                <img class="pull-right abs-right hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-solucoes2.jpg" alt="Saúde" title="Saúde">
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
commom/img/icon-saude.png" alt="Saúde" title="Saúde">
                                    </div>
                                    <div class="row">
                                        <h2 class="txt-destaques-home align-center mg-top--5">Saúde</h2>
                                    </div>
                                </div>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/solicite-solucoes.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 pd-none pd-so-mob">
                                <p class="txt-interna">
                                    Organizações de saúde de hoje enfrentam desafios significativos para maximizar o valor que oferecem, sendo que para isso, precisam melhorar a qualidade dos resultados clínicos, financeiros e de experiência do paciente, reduzindo o custo do cuidado e despesa administrativa - tudo dentro de um ambiente de regulação e reforma complexa.<br><br>

                                    Com a solução as organizações gerenciarão os grandes volumes de informações e dos eventos em tempo real para identificar potenciais problemas mais rapidamente e intervir proativamente para influenciar os resultados, em vez de analisá-los depois que eles ocorrem.
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