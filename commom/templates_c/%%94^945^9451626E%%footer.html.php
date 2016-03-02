<?php /* Smarty version 2.6.12, created on 2016-03-01 17:54:57
         compiled from ../inc/footer.html */ ?>
    <article class="blog-destaques-home">
        <div class="width-default">
            <div class="bloco-txt-assine">
                <p class="assine-news">Assine nossa Newsletter</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <form class="" name="newsletter" action="<?php echo $this->_tpl_vars['URL']; ?>
" method="post" role="search">
                    <div>
                        <input type="hidden" name="acao" value="assine-news">
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            <input type="text" name="nome_news" class="form-control pull-left" placeholder="NOME">
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            <input type="email" name="email_news" class="form-control pull-left" placeholder="EMAIL">
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <button type="submit" class="btn btn-default-site pd-none pull-right" onclick="return validaNewsletter();">
                                enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <footer>
        <article class="rodape">
            <div class="col-xs-12 col-sm-4 col-md-3  hidden-xs border-bloco-footer alinha-footer-mob altura-bloco-footer">
                <div class="row">
                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
home" title="BDA">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo-footer.png" alt="BDA" title="BDA">
                    </a>
                </div>
                <div class="row">
                    <!-- <p class="txt-logo-footer">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 border-bloco-footer alinha-footer-mob hidden-sm altura-bloco-footer">
                <p class="titulo-footer">A BDA Solutions</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                        <ul>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos">Quem somos</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
parceiros">Parceiros</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
clientes">Clientes</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
cases">Cases</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
blog">Blog</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
contato">Contato</a></li>
                        </ul>
                    </div>   
                    <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                        <ul class="menu-dois-footer">
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
software">Software</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
solucoes">Soluções</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">Serviços</a></li>
                            <li class="linha-menu-rodape"><a class="link-menu-rodape hover-default-footer" href="<?php echo $this->_tpl_vars['URL']; ?>
treinamentos">Treinamentos</a></li>
                        </ul>
                    </div>        
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 pd-none pd-lt-10 border-bloco-footer alinha-footer-mob altura-bloco-footer">
                <div class="bloco-local-footer">
                    <p class="titulo-footer">
                        Contato:
                        <br>
                    </p>
                    
                    <a class="txt-local-footer hover-default-footer" href="https://goo.gl/maps/ZUeSaoP7UGD2" target="_blank">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-local.png" alt="Local" title="Local">
                        Rua Loefgreen, 1.279 - Cep: 04040-031<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vila Mariana - São Paulo / SP - Brasil
                        <br><br>
                    </a> 
                    <a class="txt-local-footer hover-default-footer" href="tel:5501135884708"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tel.png" alt="+55 11 3588-4708" title="+55 11 3588-4708">+55 11 3588-4708</a> <br>          
                    <a class="txt-local-footer hover-default-footer" href="mailto:contato@bdasolutions.com.br"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-email.png" alt="contato@bdasolutions.com.br" title="contato@bdasolutions.com.br">contato@bdasolutions.com.br</a>  
                    <br>              
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 alinha-footer-mob hidden-xs altura-bloco-footer">
               <p class="titulo-footer">
                    Curta nossa página!
                    <br>
                </p>
                <div class="fb-page" data-href="https://www.facebook.com/bdasolutions/?fref=ts" data-width="250" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bdasolutions/?fref=ts"><a href="https://www.facebook.com/bdasolutions/?fref=ts">BDA Solutions - Big Data &amp; Analytics</a></blockquote></div></div>
            </div>
        </article>
        <div class="bloco-direitos">
            <div class="encapsula-bloco-direitos">
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <p class="txt-direitos">BDA Solutions - Todos os direitos reservados</p>
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <div class="bloco-dev">
                        <span class="link-rodape">Desenvolvimento: &nbsp;&nbsp;</span>
                        <a href="http://www.planobweb.com.br/" target="_blank"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/planob.jpg" alt="PlanoBWeb" title="PlanoBWeb"></a>
                    </div>
                </div>  
            </div>  
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/lightbox.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/mask.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/funcoes.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/geral.js"></script>