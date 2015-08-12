<?php
/**
 * Simple product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
		

	<form class="cart" method="post" enctype='multipart/form-data'>
		<div class="col-lg-4 col col-md-4 ffff">
	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	 	<?php
	 		if ( ! $product->is_sold_individually() ) {
	 			woocommerce_quantity_input( array(
	 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
	 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
	 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
	 			) );
	 		}
	 	?>
</div>
		<div class="col-lg-8 col-md-8 ffff1">
	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
	<div class="col-lg-8 col-md-offset-4">
	 	<button type="submit" class="single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button>
	</div>
	<div class="col-lg-8 col-md-offset-4">
		<?php include('yiw.php'); ?>
	</div>
		<?php //do_action( 'woocommerce_after_add_to_cart_button' ); ?>
		</div>
		
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>

					
					
					<style type="text/css">
						.yith-wcwl-add-to-wishlist {
    display: none;
}
.col-lg-8.col-md-offset-4 .yith-wcwl-add-to-wishlist {
    display: block;
}
					</style>