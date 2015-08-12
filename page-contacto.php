<?php //template name: contacto ?>
<?php get_header(); ?>
<?php have_posts(); ?>
            <?php the_post(); ?>
            <?php //debug($post); ?>
<div class="container" style="background:rgba(255,255,255,0.5);">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sin-padding">
        <h3 class="fdn" style="text-align:center;">Contacto</h3>
            <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-img">
            <img src="<?= pk_thumbnail(get_the_ID()); ?>"></img>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-from">
            <form action="" method="post">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Nombre y Apellido</label>
                    <input class="text margin-top" type="text" name="nombre" placeholder="" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="">Email</label>
                    <input class="text" type="email" name="email" placeholder="" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="">Teléfono</label>
                    <input class="text" type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="">Mensaje</label>
                    <textarea class="text"name="mensaje" id="" placeholder=""></textarea>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                    <input type="submit" class="form-enviar" value="Enviar" name="send-contact-form">
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sin-padding">
        <h3 class="fna">Donde Estamos</h3>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-map" style="margin-bottom:10px">
            <iframe src="https://www.google.com/maps/d/embed?mid=znm1ca2fV1og.kkK1GUzInvV8" width="640" height="480"></iframe>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 contact-content sin-padding" style="margin-bottom:10px">
                <?php the_content(); ?>
            <div class="clearfix"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class="contact-icon" src="<?= get_field('icono_de_direccion'); ?>"></img></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <?= get_field('direccion'); ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class="contact-icon" src="<?= get_field('icono_de_email'); ?>"></img></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <a href="mailto:<?= get_field('email'); ?>"><?= get_field('email'); ?></a>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class="contact-icon" src="<?= get_field('icono_de_telefono'); ?>"></img></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <?= get_field('telefono'); ?>
            </div>
            
            <div class="col-lg-12 sin-padding">
                <ul class="nav nav-pills contact-redes">
                    <li>
                        <a href="<?= get_field('url_de_facebook'); ?>">
                            <img class="contact-icon1" src="<?php bloginfo('template_url'); ?>/images/face.png"></img>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_field('url_de_twitter'); ?>">
                            <img class="contact-icon1" src="<?php bloginfo('template_url'); ?>/images/twi.png"></img>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_field('url_de_google_plus'); ?>">
                            <img class="contact-icon1" src="<?php bloginfo('template_url'); ?>/images/gmas.png"></img>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer();  
                  if (isset($_POST['email'])) {
                //echo"<h1>Pasoo uno !</h1>";
                        if (!empty($_POST['email']) && !empty($_POST['nombre'])) {
                            require_once ABSPATH . WPINC . '/class-phpmailer.php';
                            $mail = new PHPMailer();

                            $mail->AddAddress(get_field('email'));
                            $mail->From = get_field('email');
                            $mail->FromName = 'Solicitud de contacto';
                            $asunto = 'Solicitud de Contacto';
                            $contenido = '<div style="font-color: #000;">';
                            $contenido .= '<h2>Solicitud de Contacto Venezuela.</h2>';
                            $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                            $contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . '</p>';
                            $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                            $contenido .= '<p><strong>Telefono: </strong>' . $_POST['phone'] . '</p>';
                            $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '</div>';

                            $mail->Subject = $asunto;
                            $mail->Body = $contenido;
                            $mail->IsHTML();

                //      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                //      $mail = wp_mail($correo, $asunto, $contenido, $headers);

                        if ($mail->send()) {
                            echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.");</script>';
                            redirect(bloginfo('template_url'));
                        } else {
                            echo $mensaje = '<script type="text/javascript">alert("Error al Enviar.");</script>';
                            redirect(bloginfo('template_url') . '/contacto');
                        }
                    } else {
                        echo $mensaje = '<script type="text/javascript">alert("Faltan campos por llenar.");</script>';
                        redirect(bloginfo('template_url') . '/contacto');
                    }
                    }
        ?>