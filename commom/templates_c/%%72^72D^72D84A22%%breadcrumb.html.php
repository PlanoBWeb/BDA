<?php /* Smarty version 2.6.12, created on 2016-01-26 18:01:37
         compiled from ../inc/breadcrumb.html */ ?>
<article class="conteudo bread-pesquisar">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
            <article class="breadcrumb pd-none">
                <div class="conteudo pd-so-mob">
                    <ul class="bloco-breadcrumb">
                        <li class="linha-breadcrumb">        	
                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
home/">Home</a>
                        </li>
                        <li class="linha-breadcrumb">
                            >
                        </li>

                        <?php if ($this->_tpl_vars['pagina'] == 'produto'): ?>
                            <li class="linha-breadcrumb">           
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</a>
                            </li>
                             <li class="linha-breadcrumb">
                                >
                            </li>
                            <li class="linha-breadcrumb">           
                                <?php if ($this->_tpl_vars['id'] == "camisetas-personalizadas"): ?>
                                    CAMISETAS PERSONALIZADAS
                                <?php elseif ($this->_tpl_vars['id'] == "camiseta-formatura"): ?>
                                    CAMISETA FORMATURA
                                <?php elseif ($this->_tpl_vars['id'] == "camisetas-religiosas"): ?>
                                    CAMISETAS RELIGIOSAS
                                <?php endif; ?>
                            </li>
                        <?php elseif ($this->_tpl_vars['id'] == 'camisetas'): ?>
                            <li class="linha-breadcrumb">           
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</a>
                            </li>
                             <li class="linha-breadcrumb">
                                >
                            </li>
                            <li class="linha-breadcrumb">
                                Camisetas
                            </li>
                        <?php else: ?>
                            <li class="linha-breadcrumb">           
                                <?php echo $this->_tpl_vars['breadcrumb']; ?>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </article>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
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
    </div>
</article> 