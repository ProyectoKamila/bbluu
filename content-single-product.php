<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
	 global $product;
?>


	<?php do_action( 'woocommerce_before_single_product_summary' ); ?>

	<div class="col-lg-6 col-md-6 col-sm-12">

		<?php //do_action( 'woocommerce_single_product_summary' ); ?>
		<div id="price" class="col-lg-12 col-md-0 col-sm-0 col-xs-0">
			<p id="price" class="price"><?php echo $product->get_price_html(); ?></p>
		</div>
		<div class="class_content col-lg-11">
			<?php the_content(); ?>
		</div>
		

	</div><!-- .summary -->
	<div class="clearfix"></div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3 class="fna">
			Detalles
		</h3>
		<?php do_action( 'woocommerce_single_product_summary' ); ?>
		<?php //include('single-product/add-to-cart/variable.php'); ?>
	</div>

	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />


<?php do_action( 'woocommerce_after_single_product' ); ?>
