<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) : ?>
<style type="text/css">
	.yith-wcwl-add-to-wishlist.add-to-wishlist- {
    margin: 0 !important;
}
.yith-wcwl-add-button.show a {
    width: 100%;
    border: none;
    font-size: 16px;
    padding: 10px;
    background-color: #5CB2D5;
    font-weight: bold;
    border-right: 5px solid #2090A4;
    color: black;
    display: block;
    text-decoration: none;
}
</style>
	<div class="related products">

		<h3 class="fna"><?php _e( 'Related Products', 'woocommerce' ); ?></h3>

		<?php //woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<?php //wc_get_template_part( 'content', 'product' ); ?>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
                                                    
                                                    <a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product->id ) )?>" rel="nofollow" data-product-id="<?php echo $product->id ?>" data-product-type="<?php echo $product_type?>" class="<?php echo $link_classes ?>" >
                                                    	<span class="glyphicon glyphicon-heart" aria-hidden="true" style="/*padding: 12px 0px !important;*/color: black;"></span>
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                   </div>

			<?php endwhile; // end of the loop. ?>

		<?php //woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();