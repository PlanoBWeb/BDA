<?php /* Smarty version 2.6.12, created on 2016-03-09 17:02:26
         compiled from ../inc/menu-lateral.html */ ?>
<div class="bloco-menu-lat hidden-xs">
    <ul class="bloco-menu-lat">
        <li class="linha-menu-lat linha-menu-lat-ativo open-close-menu"><p class="link-menu-topo"><img class="img-icon-menu mg-left-" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-produtos.png" alt="produtos" title="produtos">produtos </p></li>
        <div class="menu-lat-mob">
			<li class="linha-menu-lat open-submenu-lateral"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/camisetas" class="link-menu-topo">CAMISETAS <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-open.png" alt="Abri menu" title="Abri menu"></a>
				<ul class="submenu-lateral" <?php if ($this->_tpl_vars['id'] == 'camisetas' || $this->_tpl_vars['id'] == "camisetas-personalizadas" || $this->_tpl_vars['id'] == "camiseta-formatura" || $this->_tpl_vars['id'] == "camisetas-religiosas"): ?> style="display: block" <?php endif; ?>>					
					<li class="linha-menu-lat-sub"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/camisetas-personalizadas" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == "camisetas-personalizadas"): ?> link-submenu-ativo <?php endif; ?>">Camisetas personalizadas</a></li>
					<li class="linha-menu-lat-sub"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/camiseta-formatura" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == "camiseta-formatura"): ?> link-submenu-ativo <?php endif; ?>">Camisetas formatura </a></li>
					<li class="linha-menu-lat-sub"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/camisetas-religiosas" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == "camisetas-religiosas"): ?> link-submenu-ativo <?php endif; ?>">Camisetas religiosas</a></li>
				</ul>
			</li>
			<li class="linha-menu-lat"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/canecas" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == 'canecas'): ?> link-submenu-ativo <?php endif; ?>">CANECAS</a></li>
			<!-- <li class="linha-menu-lat"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/chaveiros/" class="link-menu-topo">CHAVEIROS</a></li> -->
			<li class="linha-menu-lat"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/chinelos" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == 'chinelos'): ?> link-submenu-ativo <?php endif; ?>">CHINELOS</a></li>
			<li class="linha-menu-lat"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/sacolas-e-mochilas" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == "sacolas-e-mochilas"): ?> link-submenu-ativo <?php endif; ?>">SACOLAS E MOCHILAS</a></li>
			<li class="linha-menu-lat"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/squeeze" class="link-menu-topo <?php if ($this->_tpl_vars['id'] == 'squeeze'): ?> link-submenu-ativo <?php endif; ?>">SQUEEZES</a></li>
        </div>
    </ul>
</div>
<select class="select-produtosMob menuLatLink" name="produtosMob" id="produtosMob">
	<option class="select-mobile-sub" value="">Selecione um produto</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produtos/camisetas">CAMISETAS</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/camisetas-personalizadas">&nbsp;&nbsp;&nbsp;Camisetas personalizadas</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/camiseta-formatura">&nbsp;&nbsp;&nbsp;Camisetas formatura</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/camisetas-religiosas">&nbsp;&nbsp;&nbsp;Camisetas religiosas</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/canecas">CANECAS</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/chinelos">CHINELOS</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/sacolas-e-mochilas">SACOLAS E MOCHILAS</option>
	<option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/squeeze">SQUEEZES</option>
</select>