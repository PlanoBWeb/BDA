<?php /* Smarty version 2.6.12, created on 2016-03-10 12:02:55
         compiled from resultado-busca.html */ ?>
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
            <article class="banner-interna-faixa cor-linha-bn-software">
                <img class="pull-right abs-left hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-software2.jpg" alt="Integração de Dados" title="Integração de Dados"> 
                <div class="width-default">
                    <h1 class="titulo-faixa-interna">Resultado busca</h1>
                </div>
                <img class="pull-right abs-right hidden-xs" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/topo-interna-software.jpg" alt="Integração de Dados" title="Integração de Dados">
            </article> 
            <!-- Banner -->
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
            <section class="conteudo-interna">
                <article class="width-default pd-mob-conteudo">
                    <?php if ($this->_tpl_vars['dados']): ?>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                            <div class="row pd-tp-30 ">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
software/dell/integracao-de-dados-e-aplicativos/boomi-atomsphere">
                                        <img class="pull-left pd-all-10 pd-lf-0" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
">
                                    </a>
                                    <h2 class="titulo-interna-inst mg-titulo-interna-inst"><a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</a></h2>
                                </div>   
                                <div class="col-xs-12 col-sm-8 col-md-8 pd-left-none">     
                                    <h3 class="sub-titulo-interna-inst mg-top-none"><strong><a class="sub-azul" href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['subtitulo']; ?>
</a></strong></h3>
                                    <p class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['descricao']; ?>
</a></p>
                                </div>
                            </div>                        
                        <?php endfor; endif; ?>
                        <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                            <div class="bloco-paginacao">
                                <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                    <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                    <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                    <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][0]; ?>
">
                                    <input class="seta-pagin-laterais pull-left" type="submit" value=" << ">
                                </form>
                                <?php unset($this->_sections['j']);
$this->_sections['j']['start'] = (int)1;
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
if ($this->_sections['j']['start'] < 0)
    $this->_sections['j']['start'] = max($this->_sections['j']['step'] > 0 ? 0 : -1, $this->_sections['j']['loop'] + $this->_sections['j']['start']);
else
    $this->_sections['j']['start'] = min($this->_sections['j']['start'], $this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] : $this->_sections['j']['loop']-1);
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = min(ceil(($this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] - $this->_sections['j']['start'] : $this->_sections['j']['start']+1)/abs($this->_sections['j']['step'])), $this->_sections['j']['max']);
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>                                    
                                    <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                        <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
">
                                        <input class="seta-pagin pull-left <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']] == $this->_tpl_vars['pagPost']): ?>seta-pagin-ativo<?php endif; ?>" type="submit" value=" <?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
 ">
                                    </form>
                                <?php endfor; endif; ?>
                                <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                    <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                    <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                    <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                    <input class="seta-pagin-laterais pull-left" type="submit" value=" >> ">
                                </form>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <h1 class="titulo-produto" style="text-align: center">Não existe resultado para essa busca</h1>
                    <?php endif; ?>                    
                    <br><br>
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