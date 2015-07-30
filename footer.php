</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <a class="dropdown-toggle content-logo" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                   <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo"> 
                </a>
            </div>
            <div class="col-lg-8">
                <ul class="nav nav-pills menu">
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url(""); ?>" role="button" aria-expanded="false">
                                            Inicio
                                        </a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo home_url("contacto"); ?>" role="button" aria-expanded="false">
                                            Contacto 
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
                </ul>
                <div class="clearfix"></div>
                <p>Copyrigth © 2015  www.bbluu.com/ . Todos los derechos reservados. <br> Desarrollado por <a href="<?php echo "http://proyectokamila.com/"; ?>">Proyecto Kamila</a></p>
            </div>
            <div class="col-lg-2">
                <ul class="nav navbar-nav">
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/g+.png"></img></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/tw.png"></img></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fc.png"></img></a></li>
              </ul>
            </div>
        </div>
    </div>
    
    <?php //wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo("template_url"); ?>/scripts/anythingslider/js/jquery.min.js"><\/script>')</script>

	<!-- Anything Slider -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/anythingslider/css/anythingslider.css">
	<script src="<?php bloginfo('template_url'); ?>/scripts/anythingslider/js/jquery.anythingslider.js"></script>
	<script>
	$(function () {
		$('#slider1').anythingSlider({
//			theme : 'metallic',
			expand       : true,
			autoPlay     : true,
			buildStartStop: false,
			hashTags: false,
			buildArrows: false,
			buildNavigation: false,
			playRtl: true 
		});

		

	});
	</script>
        <script>
            $(document).ready(function() {
                $("ul.accordion li.open ul").slideUp('slow');
                $("ul.accordion li.open").removeClass('open');
                $("ul.accordion li.open1").addClass("open");
                $("ul.accordion span.name").click(function()
                {
                    var $li = $(this).parent("li").has("ul");

                    if ($li.hasClass("open"))
                    {
                        $li.find("ul").slideUp('slow', function( ) {
                            $li.removeClass("open");
                        });
                    }
                    else
                    {
                        $li.addClass("open");
                        $(".open1").addClass("open");
//                                        $(".open1").removeClass("open");
                        $li.find("ul").slideDown('slow');
                    }
//                                if( $li.hasClass("open1") )
//				{
//                                    $li.find("ul").slideUp('slow', function( ){
//						$li.removeClass("open");
////						$li.removeClass("open1");
//					});
//                                }else
//				{
//					$li.addClass("open");
//					$li.addClass("open1");
//					$li.find("ul").slideDown('slow');
//				}
                });
            });
        </script>

</footer>
</section>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>