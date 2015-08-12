<?php
/**
 * Add to wishlist button template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 2.0.8
 */

global $product;
//debug($template_part,false);
//debug($product->id);
?>

<a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product->id ) )?>" rel="nofollow" data-product-id="<?php echo $product->id ?>" data-product-type="<?php echo $product_type?>" class="<?php echo $link_classes ?>" >
    <?php echo $icon ?>
    <?php echo $label = apply_filters( 'yith_wcwl_button_label', get_option( 'yith_wcwl_add_to_wishlist_text' ) ); ?>
    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
</a>
<img src="<?php echo esc_url( YITH_WCWL_URL . 'assets/images/wpspin_light.gif' ) ?>" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />