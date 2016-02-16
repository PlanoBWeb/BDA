<?php /* Smarty version 2.6.12, created on 2016-02-16 16:11:13
         compiled from index.html */ ?>
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
    <!-- vitrine -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.transitions.css">
    <!-- vitrine -->
  </head>
  <body>
    <div class="container-fluid pd-none">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <!-- Banner -->
            <article class="xidden-xs col-sm-12 col-md-12 mg-top--5">
                <div id="demo" class="vitrine-index">
                    <div class="row">
                        <div class="span12">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="width-default">
                                        <div class="bloco-desc-banner">
                                            <h1>TIBCO Sportfire</h1>
                                            <p>Desbloqueie o valor em seus dados <br> para vencer no clima competitivo de hoje</p>
                                            <a class="saiba-mais-vitrine" href="">» Saiba mais</a>
                                        </div>
                                    </div>
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </article> 
            <!-- Banner -->
            <section class="destaques">
                <article class="conteudo">
                    <div class="row">
                        <form class="pull-right form-busca" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca" method="post" role="search">
                            <div class="form-group form-group-mob">
                                <input type="hidden" name="acao" value="busca">
                                <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                <input type="text" id="buscaValor" name="search" autocomplete="off" class="form-control pull-left campo-busca" placeholder="PESQUISAR...">
                                <button type="submit" class="btn pd-none pull-right">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-busca.png" alt="Buscar" title="Buscar">
                                </button>
                                <div id="carrega-busca-mobile" class="carrega-busca"></div>
                            </div>
                        </form>
                    </div>
                    <div class="row pd-tp-30">
                        <div class="col-xs-12 col-sm-12 col-md-12 max-width-mob">
                            <div class="col-xs-12 col-sm-3 col-md-3 bloco-dest-home">
                                <!-- <img class="img-dest-home" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-software.png" alt="Software" title="Software"> -->
                                <div class="bola-rosa bola-dest"></div>
                                <div class="row">
                                    <h2 class="destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
software">Software</a></h2>
                                    <!-- <h3 class="txt-destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
software">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </a></h3> -->
                                </div>
                            </div>  
                            <div class="col-xs-12 col-sm-3 col-md-3 bloco-dest-home">
                                <!-- <img class="img-dest-home" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-solucoes.png" alt="Soluções" title="Soluções"> -->
                                <div class="bola-cinza bola-dest"></div>
                                <div class="row">
                                    <h2 class="destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes">Soluções</a></h2>
                                    <!-- <h3 class="txt-destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </a></h3> -->
                                </div>
                            </div> 
                            <div class="col-xs-12 col-sm-3 col-md-3 bloco-dest-home">
                                <!-- <img class="img-dest-home" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-servicos.png" alt="Serviços" title="Serviços"> -->
                                <div class="bola-rosa bola-dest"></div>
                                <div class="row">
                                    <h2 class="destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">Serviços</a></h2>
                                    <!-- <h3 class="txt-destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </a></h3> -->
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 bloco-dest-home">
                                <!-- <img class="img-dest-home" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-treinamentos.png" alt="Treinamentos" title="Treinamentos"> -->
                                <div class="bola-cinza bola-dest"></div>
                                <div class="row">
                                    <h2 class="destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos">Treinamentos</a></h2>
                                    <!-- <h3 class="txt-destaques-home align-center"><a href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum </a></h3> -->
                                </div>
                            </div>     
                        </div>
                    </div>
                </article>
            </section>
            <article class="blog-destaques-home">
                <div class="bloco-destaques-banner">
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    </div> -->
                    <div id="owl-demo-blog">
                        <div class="item">
                            <div class="img-destaque-blog">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-blog.png" alt="destaque blog" title="destaque blog">
                                </a>
                            </div>
                            <h2 class="titulo-destaque-blog"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">Conferência Gartner Business Intelligence, Analytics & Information Management</a></h2>
                            <a href="" class="txt-destaque-blog">Nos dias 24 e 25 de junho, a BDA Solutions | Big Data & Analytics participou da conferência mais...</a>
                            <div class="linha-destaque-blog"></div>
                            <div class="row pd-all-10">
                                <img class="pull-left icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-data.png" alt="Data da postagem" class="Data da postagem">
                                <p class="txt-data-por pull-left">23 JUN 15</p>
                                <p class="txt-data-por pull-right">BLOG</p>
                                <img class="pull-right icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-por.png" alt="" class="">                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-destaque-blog">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-blog.png" alt="destaque blog" title="destaque blog">
                                </a>
                            </div>
                            <h2 class="titulo-destaque-blog"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">Conferência Gartner Business Intelligence, Analytics & Information Management</a></h2>
                            <a href="" class="txt-destaque-blog">Nos dias 24 e 25 de junho, a BDA Solutions | Big Data & Analytics participou da conferência mais...</a>
                            <div class="linha-destaque-blog"></div>
                            <div class="row pd-all-10">
                                <img class="pull-left icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-data.png" alt="Data da postagem" class="Data da postagem">
                                <p class="txt-data-por pull-left">23 JUN 15</p>
                                <p class="txt-data-por pull-right">BLOG</p>
                                <img class="pull-right icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-por.png" alt="" class="">                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-destaque-blog">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-blog.png" alt="destaque blog" title="destaque blog">
                                </a>
                            </div>
                            <h2 class="titulo-destaque-blog"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">Conferência Gartner Business Intelligence, Analytics & Information Management</a></h2>
                            <a href="" class="txt-destaque-blog">Nos dias 24 e 25 de junho, a BDA Solutions | Big Data & Analytics participou da conferência mais...</a>
                            <div class="linha-destaque-blog"></div>
                            <div class="row pd-all-10">
                                <img class="pull-left icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-data.png" alt="Data da postagem" class="Data da postagem">
                                <p class="txt-data-por pull-left">23 JUN 15</p>
                                <p class="txt-data-por pull-right">BLOG</p>
                                <img class="pull-right icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-por.png" alt="" class="">                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-destaque-blog">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-blog.png" alt="destaque blog" title="destaque blog">
                                </a>
                            </div>
                            <h2 class="titulo-destaque-blog"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">Conferência Gartner Business Intelligence, Analytics & Information Management</a></h2>
                            <a href="" class="txt-destaque-blog">Nos dias 24 e 25 de junho, a BDA Solutions | Big Data & Analytics participou da conferência mais...</a>
                            <div class="linha-destaque-blog"></div>
                            <div class="row pd-all-10">
                                <img class="pull-left icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-data.png" alt="Data da postagem" class="Data da postagem">
                                <p class="txt-data-por pull-left">23 JUN 15</p>
                                <p class="txt-data-por pull-right">BLOG</p>
                                <img class="pull-right icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-por.png" alt="" class="">                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-destaque-blog">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/destaque-blog.png" alt="destaque blog" title="destaque blog">
                                </a>
                            </div>
                            <h2 class="titulo-destaque-blog"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" alt="">Conferência Gartner Business Intelligence, Analytics & Information Management</a></h2>
                            <a href="" class="txt-destaque-blog">Nos dias 24 e 25 de junho, a BDA Solutions | Big Data & Analytics participou da conferência mais...</a>
                            <div class="linha-destaque-blog"></div>
                            <div class="row pd-all-10">
                                <img class="pull-left icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-data.png" alt="Data da postagem" class="Data da postagem">
                                <p class="txt-data-por pull-left">23 JUN 15</p>
                                <p class="txt-data-por pull-right">BLOG</p>
                                <img class="pull-right icon-destaque-blog" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-por.png" alt="" class="">                                
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="bloco-destaques-banner pd-bt-30">
                <div class="row">
                    <p class="txt-nossos-clientes">Nossos Clientes</p>
                </div>
                <div id="owl-demo-clientes">
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/tibco.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/idaam.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/dell.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/tibco.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/idaam.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/tibco.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/idaam.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/dell.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/tibco.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-nossos-clientes">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/idaam.jpg" alt="Cliente " title="Cliente ">
                        </div>
                    </div>
                </div>
                <div class="customNavigation">
                    <a class="btn prev">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/left.png" title="Esquerda" alt="Esquerda">
                    </a>
                    <a class="btn next">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/right.png" title="Direita" alt="Direita">
                    </a>
                </div>
            </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</body>
</html>