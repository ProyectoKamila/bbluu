<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


get_header( 'shop' ); ?>
<?php do_action( 'woocommerce_before_main_content' ); ?>
<div class="clearfix"></div>
	    <div class="" style="padding-top:20px;">
	        <div class="row">
	        	<h2 class="class_title"><?php the_title(); ?></h2>
	        	<div class="col-lg-0 col-md-12 col-sm-12 col-xs-12">
					<p id="price2" class="price"></p>
				</div>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
			</div>
		</div>
	</div>
	
	
<?php get_footer( 'shop' ); ?>
<script type="text/javascript">
	$(document).ready(function() {
    	console.log( "ready!" );
    	$( "#container" ).addClass( "container" );
	});
	</script>