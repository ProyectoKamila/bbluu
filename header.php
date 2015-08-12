<!DOCTYPE html>
<?php global $woocommerce; ?>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title><?php wp_title(); ?></title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?php wp_head(); ?>
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        </head>
        <body>
            <section class="main">
                <header class="header">
                    <div class="clearfix"></div>
                    <section class="container">
                        <div class="row">
                            <!--<section class="col-lg-2 col-md-2 col-sm-2 col-xs-12 content-logo">
                                <img src="" alt="" class="logo">
                            </section>-->
                            <section class="col-lg-12 col-md-12 col-sm-12 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-12">
                                
                                <nav class="navbar" role="navigation">
                              <!-- El logotipo y el icono que despliega el menú se agrupan
                                   para mostrarlos mejor en los dispositivos móviles -->
                              <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-ex1-collapse">
                                  <span class="sr-only">Desplegar navegación</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand content-logo" href="<?php echo home_url(""); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo">
                                </a>
                              </div>
                              <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav nav-pills">
                                    <!--<li role="presentation" class="">
                                        <a class=" content-logo"  href="<?php echo home_url(""); ?>" role="presentation" aria-expanded="false">
                                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo"> 
                                        </a>
                                    </li>-->
                                    <li role="presentation" class="">
                                        <a href="<?php echo home_url("about"); ?>" role="presentation" aria-expanded="false">
                                            Nosotros 
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="<?php echo home_url("shop"); ?>" role="presentation" aria-expanded="false">
                                            Tienda
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="<?php echo home_url("blog"); ?>" role="presentation" aria-expanded="false">
                                            Blog 
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="<?php echo home_url("contacto"); ?>" role="presentation">
                                            Contacto 
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="<?php echo home_url("my-account"); ?>" role="presentation" aria-expanded="false">
                                            Mi Cuenta 
                                        </a>
                                    </li>
                                    <li role="presentation" class=" r rico">
                                        <a href="<?php echo home_url("wishlist"); ?>" role="presentation" aria-expanded="false">
                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                            <span style="position:relative;top:-5px;"> (<?= " " . $count = yith_wcwl_count_products(); ?>)</span>
                                        </a>
                                    </li>
                                    <li role="presentation" class=" r rico">
                                        <a href="<?php echo home_url("cart"); ?>" role="presentation" aria-expanded="false">
                                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                            <span style="position:relative;top:-5px;"> (<?= sizeof($woocommerce->cart->get_cart()); ?>)</span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="buscar r">
                                        <a role="presentation" aria-expanded="false" style="cursor: auto;">
                                            <?php get_search_form(); ?>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                                </nav>
                            </section>
                        </div>
                    </section>
                </header>
            