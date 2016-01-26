<?php /* Smarty version 2.6.12, created on 2016-01-26 19:54:55
         compiled from ../inc/header.html */ ?>
<div id="fb-root"></div>
<?php echo '
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1455524614773861";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
'; ?>

<header>
    <div class="bloco-sub-topo hidden-xs">
        <div class="width-default">
            <div class="bloco-menu-sup">
                <img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-menu.png" alt="Menu" title="Menu">
                <p class="pull-right menu-top">menu</p>
            </div>
            <nav class="menu-sup">
                <ul class="encapsula-menu--sup">
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos">Quem somos</a></li>
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
parceiros">Parceiros</a></li>
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
clientes">Clientes</a></li>
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
cases">Cases</a></li>
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
blog">Blog</a></li>
                    <li class="linha-menu-sup"><a class="link-menu-sup" href="<?php echo $this->_tpl_vars['URL']; ?>
contato">Contato</a></li>
                </ul>
                <span class="close-menu-sup">x</span>
            </nav>
        </div>  
    </div>
    <section class="topo">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-2 espaco-header hidden-xs">
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
home" title="BDA">
                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="BDA" title="BDA">
                </a>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-8 menu-mobile">
                <div class="container-fluid ps-desk">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs-block" href="<?php echo $this->_tpl_vars['URL']; ?>
home" title="BDA">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="BDA" title="BDA">
                                </a>
                                <!-- <form class="navbar-left bloco-busca-mobile form-busca-mob" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca" method="post" role="search">
                                    <div class="form-group form-group-mob">
                                        <input type="hidden" name="acao" value="busca">
                                        <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="text" id="buscaValorMobile" name="search" autocomplete="off" class="form-control busca-mob pull-left" placeholder="BUSCA">
                                        <button type="submit" class="btn pd-none pull-left">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_busca.jpg" alt="Buscar" title="Buscar">
                                        </button>
                                        <div id="carrega-busca-mobile" class="carrega-busca"></div>
                                    </div>
                                </form> -->
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="linha-menu-topo  visible-xs-block">&nbsp;</li>
                                    <li class="linha-menu-topo <?php if ($this->_tpl_vars['pagina'] == 'home' || $this->_tpl_vars['pagina'] == ""): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
home">home</a></li>
                                    <li class="dropdown linha-menu-topo">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
software" class="dropdown-toggle link-menu-topo">
                                            software</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'software' || $this->_tpl_vars['pagina'] == "software-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-software.png" alt="software" title="software"><?php endif; ?>
                                        <ul class="dropdown-menu">
                                            <div class="bloco-dropdown-menu">
                                                <!-- <li><span class="link-menu-topo">&nbsp;&nbsp;&nbsp;&nbsp;Dell</span></li> -->
                                                <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="software" title="software">Software interna</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="software" title="software">Software</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown linha-menu-topo">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes" class="dropdown-toggle link-menu-topo">
                                            Soluções</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'solucoes' || $this->_tpl_vars['pagina'] == "solucoes-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-solucoes.png" alt="Soluções" title="Soluções"><?php endif; ?>                                            
                                        <ul class="dropdown-menu">
                                            <div class="bloco-dropdown-menu">
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Soluções" title="Soluções">Soluções interna</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Soluções" title="Soluções">Soluções</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown linha-menu-topo">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos" class="dropdown-toggle link-menu-topo">
                                            serviços</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'servicos' || $this->_tpl_vars['pagina'] == "servicos-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-servicos.png" alt="serviços" title="serviços"><?php endif; ?>                                            
                                        <ul class="dropdown-menu">
                                            <div class="bloco-dropdown-menu">
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="serviços" title="serviços">Serviços interna</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="serviços" title="serviços">Serviços</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown linha-menu-topo">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos" class="dropdown-toggle link-menu-topo">
                                            treinamentos</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'treinamentos' || $this->_tpl_vars['pagina'] == "treinamentos-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-treinamentos.png" alt="treinamentos" title="treinamentos"><?php endif; ?>                                            
                                        <ul class="dropdown-menu ">
                                            <div class="bloco-dropdown-menu">
                                                <li><a class="link-menu-topo linha-menu-topo-treinamentos" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-treinamentos.png" alt="treinamentos" title="treinamentos">Treinamentos interna</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-treinamentos" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-treinamentos.png" alt="treinamentos" title="treinamentos">Treinamentos</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="linha-menu-topo visible-xs-block">&nbsp;</li>
                                    <li class="linha-menu-topo visible-xs-block">&nbsp;</li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == "quem-somos"): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos">Quem somos</a></li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'parceiros'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
parceiros">Parceiros</a></li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'clientes'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
clientes">Clientes</a></li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'cases'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
cases">Cases</a></li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'home'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
blog">Blog</a></li>
                                    <li class="linha-menu-topo visible-xs-block <?php if ($this->_tpl_vars['pagina'] == 'home'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo" href="<?php echo $this->_tpl_vars['URL']; ?>
contato">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- <div class="row bloco-contato-mob">
                <div class="row">
                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tel.png" alt="+55 11 3588-4708" title="+55 11 3588-4708">
                    <a href="tel:5501135884708" class="contato-topo-mob">+55 11 3588-4708</a>
                </div>
                <div class="row">
                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-email.png" alt="contato@bdasolutions.com.br" title="contato@bdasolutions.com.br">
                    <a href="mailto:contato@bdasolutions.com.br" class="contato-topo-mob">contato@bdasolutions.com.br</a>
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-3 col-md-2 pd-none bloco-contato-mob">
                <div class="row">
                    <img class="pull-left icon-topo-mob visible-xs-block" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tel.png" alt="+55 11 3588-4708" title="+55 11 3588-4708">
                    <a href="tel:5501135884708" class="contato-topo-mob visible-xs-block">+55 11 3588-4708</a>
                    <div class="pull-right icon-redes-topo">
                        <a class="pull-left" href="https://www.facebook.com/bdasolutions/" target="_blank" alt="Acesse nosso Facebook"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-face.png" alt="Acesse nosso Facebook" title="Acesse nosso Facebook"></a>
                        <a class="pull-left" href="https://plus.google.com/118384974989096345307/" target="_blank" alt="Acesse nosso Google Plus"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-google.png" alt="Acesse nosso Google Plus" title="Acesse nosso Google Plus"></a>
                        <a class="pull-left" href="" target="_blank" alt="Acesse nosso Twitter"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-twitter.png" alt="Acesse nosso Twitter" title="Acesse nosso Twitter"></a>
                        <a class="pull-left" href="https://www.youtube.com/channel/UCpXiTM6jrc9e5zD1WtaCOfA" target="_blank" alt="Acesse nosso canal no Youtube"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-youtube.png" alt="Acesse nosso canal no Youtube" title="Acesse nosso canal no Youtube"></a>
                        <a class="pull-left" href="https://www.linkedin.com/company/bda-solutions" target="_blank" alt="Acesse nosso Likedin"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-likedin.png" alt="Acesse nosso Likedin" title="Acesse nosso Likedin"></a>
                    </div>
                </div>
                <div class="row visible-xs-block">
                    <img class="pull-left icon-topo-mob" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-email.png" alt="contato@bdasolutions.com.br" title="contato@bdasolutions.com.br">
                    <a href="mailto:contato@bdasolutions.com.br" class="contato-topo-mob">contato@bdasolutions.com.br</a>
                </div>
            </div>
        </div>
    </section>
</header>