<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quick</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->

        <!-- Obs: Caso não der certo configurar adicionar a pasta application as referencias do css -->

        <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all"/>

        <link href="<?php echo base_url('css/carrinho.css'); ?>" rel="stylesheet" type="text/css" media="all"/>

        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />


        <link rel="stylesheet" href="<?php echo base_url('css/style2.css'); ?>">
        <!-- font-awesome icons -->
        <link href="<?php echo base_url('css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" media="all" /> 

        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?php echo base_url('js/jquery-1.11.1.min.js'); ?>"></script>

        <!-- //js -->
        <link href="<?php echo base_url('//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'); ?>" rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'); ?>" rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('js/move-top.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/easing.js'); ?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <script>

            function excluirCliente(id, nome) {
                if (confirm('Deseja excluir o cliente ' + nome)) {
                    location.href = "<?php echo base_url('ControllerCliente/excluirCliente'); ?>" + "/" + id;
                }
            }
        </script>
        <script>

            function excluirProduto(id, nome) {
                if (confirm('Deseja excluir o produto ' + nome)) {
                    location.href = "<?php echo base_url('ControllerProduto/excluirProduto'); ?>" + "/" + id;
                }
            }
        </script>

        <script>

            function excluirOperador(id, nome) {
                if (confirm('Deseja excluir o operador ' + nome)) {
                    location.href = "<?php echo base_url('ControllerOperador/excluirOperador'); ?>" + "/" + id;
                }
            }
        </script>

        <script>

            function excluirAdministrador(id, nome) {
                if (confirm('Deseja excluir o administrador ' + nome)) {
                    location.href = "<?php echo base_url('ControllerAdministrador/excluirAdministrador'); ?>" + "/" + id;
                }
            }
        </script>

        <script>

            function excluirBanner(id, nome) {
                if (confirm('Deseja excluir o Banner ' + nome)) {
                    location.href = "<?php echo base_url('ControllerBanner/excluirBanner'); ?>" + "/" + id;
                }
            }
        </script>



    </head>
    <body>
        <!-- header -->
        <div class="agileits_header">
            <div class="w3l_offers">
                <a>-------------------</a>
            </div>
            <div class="w3l_search">
                <form action="<?php echo base_url('resultadodabusca/') ?>" method="post">
                    <input type="text" name="busca" placeholder="Buscar produtos...">
                    <input type="submit" value="">
                </form>
            </div>
            
            <div class="dropdown">
                <div class="w3l_header_right">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown" data-toggle="dropdown" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart"></i> Carrinho Compra <span class="caret"></span> <!-- A class caret serve para mostrar a setinha em um campo dropdown -->
                            </a>
                            <ul class="dropdown-menu carrinho-compra">
                                <li class="margin-top-20">
                                    <div class="col-xs-4 text-left" >
                                        Itens: <span class="carrinho-top-total-item">2</span>
                                    </div>
                                    <div class="col-xs-8 text-right" >
                                        Total: <span class="carrinho-top-total-valor">R$ 5.000,00</span>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li> <!-- Separador de submenus  -->
                                <li class="margin-top-40">
                                    
                                    <div class="col-xs-6">
                                        <a href="<?= base_url('ControllerCarrinho/carrinho') ?>" title="Exibir Carrinho" class="btn btn-success btn-block">Exibir Carrinho</a>
                                    </div>
                                    <div class="col-xs-6"> <!-- O col-xs-6 coloca botões um ao lado do outro  -->
                                        <a href="#" class="btn btn-danger btn-block">Limpar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

<!-- Codigo do icone do carrinho de compras <i class="fa fa-shopping-cart"></i> -->

            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="<?php echo base_url('login/'); ?>">Entrar</a></li> 
                                    <li><a href="<?php echo base_url('cadastroclientes/'); ?>">Cadastre-se</a></li>
                                </ul>
                            </div>                  
                        </div>	
                    </li>
                </ul>
            </div>
            <div class="w3l_header_right">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="<?php echo base_url('paineladministrativo/'); ?>" ><i class="fa fa-th-list"></i><span></span></a>                
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- script-for sticky-nav -->
        <script>
            $(document).ready(function () {
                var navoffeset = $(".agileits_header").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".agileits_header").addClass("fixed");
                    } else {
                        $(".agileits_header").removeClass("fixed");
                    }
                });

            });
        </script>
        <!-- //script-for sticky-nav -->
        <div class="logo_products">
            <div class="container">
                <div class="w3ls_logo_products_left">
                    <h1><a href="<?php echo base_url('index') ?>"><img src="<?php echo base_url('application/images/Logo-Quick2.jpg'); ?>" width="130" height="100"></a></h1>
                </div>
                <div class="w3ls_logo_products_left1">
                    <ul class="special_items">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(XX) XXXX-XXXX</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>TESTE@TESTE.COM</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </body>
</html>
                <?php
