<!DOCTYPE html>
<?php global $woocommerce; ?>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title><?php wp_title(); ?></title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/menu.css">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <?php //wp_head(); ?>
        </head>
        <body>
            <section class="main">
                <header class="">
                    <section class="container">
                        <div class="row">
                            <!--<section class="col-lg-2 col-md-2 col-sm-2 col-xs-12 content-logo">
                                <img src="" alt="" class="logo">
                            </section>-->
                            <section class="col-lg-10 col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-0 col-lg-offset-0 col-xs-12">
                                <ul class="nav nav-pills menu">
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle content-logo" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo"> 
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url("nosotros"); ?>" role="button" aria-expanded="false">
                                            Nosotros 
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url("tienda"); ?>" role="button" aria-expanded="false">
                                            Tienda
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url("blog"); ?>" role="button" aria-expanded="false">
                                            Blog 
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url("contacto"); ?>" role="button" aria-expanded="false">
                                            Contacto 
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                                            Mi Cuenta 
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown r rico">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                            <span style="position:relative;top:-5px;"> (8)</span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown r rico">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                            <span style="position:relative;top:-5px;"> (5)</span>
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown r">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: auto;">
                                            <?php get_search_form(); ?>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </section>
                </header>
            