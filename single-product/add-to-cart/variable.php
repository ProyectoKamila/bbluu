<?php
/**
 * Variable product add to cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $post;
//debug($product,false);
//debug($post);
?>

<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo $post->ID; ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">
	<?php if ( ! empty( $available_variations ) ) : ?>
<div class="col-lg-4 col col-md-4 col-sm-12" style="padding-top:20px;">
		<table class="variations" cellspacing="0" style="width:100%">
			<tbody>
				<?php $loop = 0; foreach ( $attributes as $name => $options ) : $loop++; ?>
					<tr>
						<td class="label"><label for="<?php echo sanitize_title( $name ); ?>"><?php echo wc_attribute_label( $name ); ?></label></td>
						<td class="value"><select id="<?php echo esc_attr( sanitize_title( $name ) ); ?>" name="attribute_<?php echo sanitize_title( $name ); ?>" data-attribute_name="attribute_<?php echo sanitize_title( $name ); ?>">
							<option value=""><?php echo __( 'Choose an option', 'woocommerce' ) ?>&hellip;</option>
							<?php
								if ( is_array( $options ) ) {

									if ( isset( $_REQUEST[ 'attribute_' . sanitize_title( $name ) ] ) ) {
										$selected_value = $_REQUEST[ 'attribute_' . sanitize_title( $name ) ];
									} elseif ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) {
										$selected_value = $selected_attributes[ sanitize_title( $name ) ];
									} else {
										$selected_value = '';
									}

									// Get terms if this is a taxonomy - ordered
									if ( taxonomy_exists( $name ) ) {

										$terms = wc_get_product_terms( $post->ID, $name, array( 'fields' => 'all' ) );

										foreach ( $terms as $term ) {
											if ( ! in_array( $term->slug, $options ) ) {
												continue;
											}
											echo '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $selected_value ), sanitize_title( $term->slug ), false ) . '>' . apply_filters( 'woocommerce_variation_option_name', $term->name ) . '</option>';
										}

									} else {

										foreach ( $options as $option ) {
											echo '<option value="' . esc_attr( sanitize_title( $option ) ) . '" ' . selected( sanitize_title( $selected_value ), sanitize_title( $option ), false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>';
										}

									}
								}
							?>
						</select> <?php
							if ( sizeof( $attributes ) === $loop ) {
								echo '<a class="reset_variations" href="#reset">' . __( 'Clear selection', 'woocommerce' ) . '</a>';
							}
						?></td>
					</tr>
		        <?php endforeach;?>
			</tbody>
		</table>
</div>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
		<div class="col-lg-8 col-md-8">
		<div class="single_variation_wrap" style="display:none;">
			<?php do_action( 'woocommerce_before_single_variation' ); ?>

			<!--<div class="single_variation col-lg-12"></div>-->

			<div class="variations_button">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php woocommerce_quantity_input( array(
						'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
					) ); ?>
					
				</div>
				<div class="single_variation col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
				</div>
			</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-4">
						<button type="submit" class="single_add_to_cart_button button alt">
						<?php echo $product->single_add_to_cart_text(); ?>
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					</button>
					</div>
					<div class="col-lg-8 col-sm-12 col-xs-12 col-md-offset-4">
						<?php include('yiw.php'); ?>
					</div>
				</div>
			</div>

			<input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
			<input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
			<input type="hidden" name="variation_id" class="variation_id" value="" />

			<?php do_action( 'woocommerce_after_single_variation' ); ?>
		</div>
</div>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<?php else : ?>

		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>

	<?php endif; ?>

</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
