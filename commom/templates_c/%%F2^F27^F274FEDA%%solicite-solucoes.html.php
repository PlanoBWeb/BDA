<?php /* Smarty version 2.6.12, created on 2016-03-30 16:31:32
         compiled from ../inc/solicite-solucoes.html */ ?>
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
        <?php if ($this->_tpl_vars['terceiraUrl']['txtsolicite']): ?>
            <?php echo $this->_tpl_vars['terceiraUrl']['txtsolicite']; ?>

        <?php else: ?>
            Solicite um Orçamento
        <?php endif; ?>
    </a>
</div>