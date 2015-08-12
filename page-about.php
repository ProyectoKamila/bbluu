<?php get_header(); ?>
<div class="container" style="/*background: url(<?php bloginfo('template_url'); ?>/images/f.png);*/">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: rgba(255, 255, 255, 0.5);">
            <h3 class="fdn">Destacados</h3>
            <div class="clearfix"></div>
            <?php query_posts(array("post_type" => "page", "pagename" =>"about", "posts_per_page" => 1)); ?>
                 <?php while (have_posts()) { ?>
                <?php the_post(); ?>
                    <div class="col-lg-6">
                        <img src="<?= get_field('imagen_principal'); ?>"></img>
                    </div>
                    <div class="col-lg-6"><?php the_content(); ?></div>
            <div class="clearfix"></div>
                    <h3 class="fna">Misi&oacute;n</h3>
                    <div class="col-lg-6">
                        <img src="<?= get_field('imagen_de_mision'); ?>"></img>
                    </div>
                    <div class="col-lg-6">
                        <?= get_field('contenido_de_mision'); ?>
                    </div>
            <div class="clearfix"></div>
                    <h3 class="fna">Visi&oacute;n</h3>
                    <div class="col-lg-6">
                        <img src="<?= get_field('imagen_de_vision'); ?>"></img>
                    </div>
                    <div class="col-lg-6">
                        <?= get_field('contenido_de_vision'); ?>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>
<style type="text/css">
    body{
        background:transparent !important;
    }
</style>
<?php get_footer(); ?>