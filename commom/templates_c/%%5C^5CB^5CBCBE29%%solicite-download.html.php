<?php /* Smarty version 2.6.12, created on 2016-03-23 17:16:13
         compiled from ../inc/solicite-download.html */ ?>
<div class="col-xs-12 bloco-trial">
    <?php if ($this->_tpl_vars['terceiraUrl']['solicite'] != '0'): ?>
        <div class="width-solicite-trial pd-none pd-so-mob" <?php if ($this->_tpl_vars['terceiraUrl']['download'] == '0'): ?>style="float:none"<?php endif; ?>>         
            <?php if ($this->_tpl_vars['inicialUrl']['urlPagina'] == 'solucoes'): ?>
                <img class="img-icon-link" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-interna-solucoes.png" alt="Solicite um Orçamento" title="Solicite um Orçamento">
            <?php else: ?>
                <img class="img-icon-link" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-interna.png" alt="Solicite um Orçamento" title="Solicite um Orçamento">
            <?php endif; ?>

            
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
orcamento">
                <img class="img-icon-link-int" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-solicite.png" alt="Solicite um Orçamento" title="Solicite um Orçamento">
            </a>
            <a class="nome-link-int" href="<?php echo $this->_tpl_vars['URL']; ?>
orcamento">
                Solicite um Orçamento
            </a>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['terceiraUrl']['download'] != '0'): ?>
        <div class="width-solicite-trial pd-none pd-so-mob <?php if ($this->_tpl_vars['terceiraUrl']['solicite'] != '0'): ?>right-so-desk<?php endif; ?>" <?php if ($this->_tpl_vars['terceiraUrl']['download'] != '0'): ?>style="float:none"<?php endif; ?>>
            <?php if ($this->_tpl_vars['inicialUrl']['urlPagina'] == 'solucoes'): ?>
                <img class="img-icon-link" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-interna-solucoes.png" alt="Download Trial 30 dias" title="Download Trial 30 dias">
            <?php else: ?>
                <img class="img-icon-link" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-link-interna.png" alt="Download Trial 30 dias" title="Download Trial 30 dias">
            <?php endif; ?>
            <a href="">
                <img class="img-icon-link-int" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-download.png" alt="Download Trial 30 dias" title="Download Trial 30 dias">
            </a>
            <a class="nome-link-int" href="">
                Download Trial 30 dias
            </a>
        </div>
    <?php endif; ?>
</div>