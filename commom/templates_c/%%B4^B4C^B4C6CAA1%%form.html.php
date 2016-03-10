<?php /* Smarty version 2.6.12, created on 2016-03-07 11:44:06
         compiled from ../inc/form.html */ ?>
<form class="form-horizontal form-fale" name="contato" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
envia">
    <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['pagina']; ?>
">
    <input type="hidden" name="codigo" value="<?php echo $this->_tpl_vars['dados'][0]['codigo']; ?>
">
    <div class="row">
        <div class="col-xs-12 col-sm-2 col-md-2 pd-mobile-form-home">
            <label class="label-right-left" for="fale_nome">Nome:</label>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-10 pd-mobile-form-home">
            <input type="text" name="fale_nome" class="form-home form-control" id="fale_nome">
        </div>
    </div>
    <div class="row">
        <label for="inputEmail3" class="col-sm-2 control-label pd-none-mob pd-mobile-form-home">e-mail*</label>
        <div class="col-sm-5 pd-none-mob pd-mobile-form-home">
            <input type="email" name="fale_email" class="form-control" id="inputEmail3">
        </div>
        <label for="telefone" class="col-sm-1 control-label pd-none-mob pd-mobile-form-home">Telefone*</label>
        <div class="col-sm-4 pd-none-mob pd-mobile-form-home">
            <input type="tel" name="fale_telefone" class="form-control" id="telefone">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-2 col-md-2 pd-mobile-form-home">
            <label class="label-right-left" for="inputMsg">Mensagem:</label>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-10 pd-mobile-form-home">
            <textarea name="fale_msg" class="form-home text-area-home form-control" id="inputMsg"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-2 col-md-2 pd-mobile-form-home">
            <label class="label-right-left" for="onde">Onde nos <br>encontrou?</label>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 pd-mobile-form-home">
            <select class="form-home form-control" name="onde" id="onde">
                <option value=""></option>
                <option value="Google">Google</option>
                <option value="Indicação">Indicação</option>
                <option value="E-mail MKT">E-mail MKT</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 pull-right pd-mobile-form-home">
            <button type="submit" class="btn btn-default-site pull-right" onclick="return enviardados();">enviar!</button>
        </div>                        
    </div>
</form> 