<?php /* Smarty version 2.6.12, created on 2016-01-21 16:57:32
         compiled from ../inc/breadcrumb.html */ ?>
<article class="breadcrumb">
    <div class="conteudo">
        <h1 class="titulo-pag-bread hidden-xs"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</h1>
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