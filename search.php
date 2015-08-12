<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<style type="text/css">
	.produc {
    	margin: 12px 0px;
	}
	.content_nav{
		position: absolute;
		width: 95%;
	}
	.col-lg-9.e9 {
	    margin-bottom: 12px;
	    z-index: 2;
	}
</style>
	<div class="clearfix"></div>
	<!--<div class="container-fluid slider" style="background-position: top center;height: auto;">-->
	<div class="container-fluid slider" style="height:auto;">
	    <div class="container" style="padding-top:20px;background:rgba(255,255,255,0.5);"><!--style="padding-top:20px;background: url(<?php bloginfo('template_url'); ?>/images/banner.jpg) no-repeat white;"-->
	        <div class="row">
	            <div class="col-lg-3 col-md-3 com-sm-3 con-menu" style="min-height:170px;margin-top: 20px;">
	                <?php get_template_part('filter'); ?>
	            </div>
					<?php $cont = 1; ?>
					<!--<div class="col-lg-9 col-md-9 e9">-->
						<h3 class="fd ddrr">Destacados</h3>
					<?php //query_posts(array("post_type" => "product", "posts_per_page" => 18,'paged' => $page)); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 <?php if($cont == 4){ echo ' col-md-offset-3'; } ?>">
					<div class="produc">
                        <a href="<?php the_permalink(); ?>" title="add">
                                        <div class="producimgcontent" style="background:url(<?php the_first_image(); ?>) white;">
                                            <img src="<?php bloginfo('template_url'); ?>/images/pr.png"/>
                                            <div class="producimgtext">
                                                <span class="tite"> <?php the_title(); ?></span>
                                                <div class="contenthetext">
                                                <?php echo substr(get_the_content(), 0, 200); ?>
                                            </div>
                                            </div>
                                        </div>
                                        </a>
                                        <div class="contentpreci">
                                            <div class="col-lg-2 col-md-2 col-sm-2 producaddcart">
                                                <a id="add-cart" href="<?php the_permalink(); ?>" class="add" title="add">
                                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 producpreci">
                                                <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 producwi">
                                                    <?= MY_YITH::add_to_wishlist_button( $yith_wcwl->get_wishlist_url(), $product->product_type, $yith_wcwl->is_product_in_wishlist( $product->id ) );?>
                                                </div>
                                        </div>
                                    </div>
                                   </div>
                                   <?php $cont++; ?>
					<?php endwhile; // end of the loop. ?>
					<div class="clearfix"></div>
					<nav class="pag">
						<?php if (function_exists("pagination")) {
			                pagination($wp_query->max_num_pages);
			            }
			            ?>
					</nav>
					<!--</div>-->
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>

	
	
<?php get_footer( 'shop' ); ?>
