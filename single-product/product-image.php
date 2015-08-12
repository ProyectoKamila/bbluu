<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>

	<?php
	
	if ( !has_post_thumbnail() ) {
		//echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
	}
	
	
		if ( has_post_thumbnail() ) {

			$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       	= get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title'	=> $image_title,
				'alt'	=> $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '', '','','' ), $post->ID );
			} else {
				$gallery = '';
				?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class=" col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 img-principal"><?= $image; ?></div>
				</div>
				<?php
				
			}
			//debug($image);
			

			//echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '', '','','' ), $post->ID );
			
		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>
