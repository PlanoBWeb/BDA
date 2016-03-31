<?php /* Smarty version 2.6.12, created on 2016-03-31 17:35:09
         compiled from ../inc/header.html */ ?>
<div class="block-hidden hidden-xs">
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
            <div class="pull-left hidden-xs">
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
            <div class="bloco-menu-sup">
                <img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-menu.png" alt="Menu" title="Menu">
                <p class="pull-right menu-top">menu</p>
            </div>
        </div>  
    </div>
    <section class="topo">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 espaco-header hidden-xs">
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
home" title="BDA">
                    <img class="img-logo-desk" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="BDA" title="BDA">
                </a>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 menu-mobile pull-right">
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
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="linha-menu-topo  visible-xs-block">&nbsp;</li>
                                    <li class="linha-menu-topo hover-home <?php if ($this->_tpl_vars['pagina'] == 'home' || $this->_tpl_vars['pagina'] == ""): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo border-top-menu" href="<?php echo $this->_tpl_vars['URL']; ?>
home">home</a></li>
                                    <li class="dropdown linha-menu-topo hover-software">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
software" class="dropdown-toggle link-menu-topo border-top-menu">
                                            software</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'software' || $this->_tpl_vars['pagina'] == "software-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-software.png" alt="software" title="software"><?php endif; ?>
                                        <ul class="dropdown-menu">
                                            <div class="bloco-dropdown-menu">
                                                <!-- <li><span class="link-menu-topo">&nbsp;&nbsp;&nbsp;&nbsp;Dell</span></li> -->
                                                <li class="sub-submenu hidden-xs">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Dell</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/integracao-de-dados-e-aplicativos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Integração De Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/gerenciamento-de-banco-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Gerenciamento De Banco De Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/business-intelligence"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Busines Intelligence</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/backup-e-replicacao-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Backup E Replicação de Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/advanced-analytics"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Advanced Analytics</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="sub-submenu-mob visible-xs-block">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Dell</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/integracao-de-dados-e-aplicativos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Integração De Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/gerenciamento-de-banco-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Gerenciamento De Banco De Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/business-intelligence"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Busines Intelligence</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/backup-e-replicacao-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Backup E Replicação de Dados</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/advanced-analytics"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Dell" title="Dell">Advanced Analytics</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Tibco" title="Tibco">Tibco</a></li> -->
                                                <li class="sub-submenu hidden-xs">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="tibco" title="tibco">Tibco</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-desktop"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Desktop" title="Spotfire Desktop">Spotfire Desktop</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-platform"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Platform" title="Spotfire Platform">Spotfire Platform</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-analytics-para-big-data"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Analytics" title="Spotfire Analytics">Spotfire Analytics</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="sub-submenu-mob visible-xs-block">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Tibco" title="Tibco">Tibco</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-desktop"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Desktop" title="Spotfire Desktop">Spotfire Desktop</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-platform"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Platform" title="Spotfire Platform">Spotfire Platform</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/tibco/spotfire-analytics-para-big-data"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Spotfire Analytics" title="Spotfire Analytics">Spotfire Analytics</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- <li class="sub-submenu hidden-xs"><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Tibco" title="Tibco">Tibco</a></li> -->
                                                <!-- <li class=""><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="microsoft" title="microsoft">Microsoft</a></li> -->
                                                <li class="sub-submenu hidden-xs">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Microsoft" title="Microsoft">Microsoft</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/microsoft-azure"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Azure" title="Azure">Azure</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/power-bi"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Power BI" title="Power BI">Power BI</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/data-analytics"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Data Analytics" title="Data Analytics">Data Analytics</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/solucao-big-data-microsoft"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Big Data" title="Big Data">Big Data</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="sub-submenu-mob visible-xs-block">
                                                    <a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Microsoft" title="Microsoft">Microsoft</a>
                                                    <div class="bloco-sub-submenu">
                                                        <ul class="dropdown-sub-submenu">
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/microsoft-azure"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Azure" title="Azure">Azure</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/power-bi"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Power BI" title="Power BI">Power BI</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/data-analytics"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Data Analytics" title="Data Analytics">Data Analytics</a></li>
                                                            <li><a class="link-menu-topo linha-menu-topo-software" href="<?php echo $this->_tpl_vars['URL']; ?>
software/microsoft/solucao-big-data-microsoft"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-software.png" alt="Big Data" title="Big Data">Big Data</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown linha-menu-topo hover-solucoes">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes" class="dropdown-toggle link-menu-topo border-top-menu">
                                            Soluções</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'solucoes' || $this->_tpl_vars['pagina'] == "solucoes-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-solucoes.png" alt="Soluções" title="Soluções"><?php endif; ?>                                            
                                        <ul class="dropdown-menu dropdown-menu-solucoes">
                                            <div class="bloco-dropdown-menu">
                                                <!-- <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Soluções" title="Soluções">Soluções interna</a></li> -->
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/gestao-de-banco-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Gestão de Banco de Dados" title="Gestão de Banco de Dados">Gestão de Banco de Dados</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/gestao-de-analise-de-dados"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Gestão de Análise de Dados (Estatísticas)" title="Gestão de Análise de Dados (Estatísticas)">Gestão de Análise de Dados (Estatísticas)</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/big-data-e-iot"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="BIG Data & IoT" title="BIG Data & IoT">BIG Data & IoT</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/dell-statistica"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Dell Statistica" title="Dell Statistica">Dell Statistica</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/gestao-de-risco-de-credito"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Gestão de Risco  de Crédito" title="Gestão de Risco  de Crédito">Gestão de Risco  de Crédito</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/business-intelligence-analytics"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Business Intelligence Analytics" title="Business Intelligence Analytics">Business Intelligence Analytics</a></li>
                                                <!-- <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/gestao-de-avaliacao-educacional"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Gestão de Avaliação Educacional" title="Gestão de Avaliação Educacional">Gestão de Avaliação Educacional</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-solucoes" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes/social-media"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-solucoes.png" alt="Social Media" title="Social Media">Social Media</a></li> -->
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown linha-menu-topo hover-servicos">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos" class="dropdown-toggle link-menu-topo border-top-menu">
                                            serviços</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'servicos' || $this->_tpl_vars['pagina'] == "servicos-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-servicos.png" alt="serviços" title="serviços"><?php endif; ?>                                            
                                        <ul class="dropdown-menu dropdown-menu-solucoes">
                                            <div class="bloco-dropdown-menu">
                                                <!-- <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="serviços" title="serviços">Serviços</a></li> -->
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/master-data-management"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="Master data management" title="Master data management">Master data management</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/data-intelligence"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="Data intelligence" title="Data intelligence">Data intelligence</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/implementacao-e-suporte"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="Implementação & suporte" title="Implementação & suporte">Implementação & suporte</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/consultoria-especializada"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="Consultoria especializada" title="Consultoria especializada">Consultoria especializada</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-servicos" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/outsourcing-profissionais-de-ti"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-servicos.png" alt="Outsourcing profissionais de TI" title="Outsourcing profissionais de TI">Outsourcing profissionais de TI</a></li>
                                            </div>
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown linha-menu-topo hover-treinamentos">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos" class="dropdown-toggle link-menu-topo">
                                            treinamentos</a>
                                        <?php if ($this->_tpl_vars['pagina'] == 'treinamentos' || $this->_tpl_vars['pagina'] == "treinamentos-interna"): ?><img class="menu-topo-ativo hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-treinamentos.png" alt="treinamentos" title="treinamentos"><?php endif; ?>                                            
                                        <ul class="dropdown-menu ">
                                            <div class="bloco-dropdown-menu">
                                                <li><a class="link-menu-topo linha-menu-topo-treinamentos" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-treinamentos.png" alt="treinamentos" title="treinamentos">Treinamentos</a></li>
                                                <li><a class="link-menu-topo linha-menu-topo-treinamentos" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos-interna"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-drop-treinamentos.png" alt="treinamentos" title="treinamentos">Treinamentos interna</a></li>
                                            </div>
                                        </ul>
                                    </li> -->
                                    <li class="linha-menu-topo hover-treinamentos <?php if ($this->_tpl_vars['pagina'] == 'treinamentos'): ?> linha-menu-topo-ativo <?php endif; ?>"><a class="link-menu-topo border-top-menu" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos">treinamentos</a></li>
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
            <div class="col-xs-12 pd-none bloco-contato-mob visible-xs-block">
                <div class="row">
                    <img class="pull-left icon-topo-mob visible-xs-block" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tel.png" alt="+55 11 3588-4708" title="+55 11 3588-4708">
                    <a href="tel:5501135884708" class="contato-topo-mob visible-xs-block">+55 11 3588-4708</a>
                    <div class="pull-right icon-redes-topo">
                        <a class="pull-left" href="https://www.facebook.com/bdasolutions/" target="_blank" alt="Acesse nosso Facebook"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-face_.png" alt="Acesse nosso Facebook" title="Acesse nosso Facebook"></a>
                        <a class="pull-left" href="https://plus.google.com/118384974989096345307/" target="_blank" alt="Acesse nosso Google Plus"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-google_.png" alt="Acesse nosso Google Plus" title="Acesse nosso Google Plus"></a>
                        <a class="pull-left" href="" target="_blank" alt="Acesse nosso Twitter"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-twitter_.png" alt="Acesse nosso Twitter" title="Acesse nosso Twitter"></a>
                        <a class="pull-left" href="https://www.youtube.com/channel/UCpXiTM6jrc9e5zD1WtaCOfA" target="_blank" alt="Acesse nosso canal no Youtube"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-youtube_.png" alt="Acesse nosso canal no Youtube" title="Acesse nosso canal no Youtube"></a>
                        <a class="pull-left" href="https://www.linkedin.com/company/bda-solutions" target="_blank" alt="Acesse nosso Likedin"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-likedin_.png" alt="Acesse nosso Likedin" title="Acesse nosso Likedin"></a>
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