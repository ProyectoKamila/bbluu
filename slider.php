<div class="container-fluid slider">
        <div class="container slider">
            <div class="row">
                <div id="wrapper1">
                	<ul id="slider1">
                	    <?php $page; ?>
                	    <?php for($i =1; $i <=6; $i++){ ?>
                	    <?php if($i%2==1){ $cat = "nina-d"; ?>
                	    <?php }else{ $cat = "nino-d"; $page = $page=+1; }  ?>
                	    <?php query_posts(array("post_type" => "product", "product_cat" => $cat, "posts_per_page" => 1,'paged' => $page)); ?>
                                    <?php while (have_posts()) { ?>
                                        <?php the_post(); ?>
                                        <?php //if($post){ ?>
                		<li>
                		    
                		    <div class="col-lg-6 col-md-6 col-sm-6 na">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-md-offset-1">
                                    
                                    <?php if($i%2==1){ ?>
                                    <div class="produc">
                        <a href="<?php the_permalink(); ?>" title="add">
                                        <div class="producimgcontent" style="background:url(<?php the_first_image(); ?>);">
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
                                            <div class="col-lg-2 col-md-2 col-sm-2 producaddcart" style="background: #93bb43;">
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
                                    
                                    <?php } ?>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 no">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    
                                    <?php if($i%2==0){ ?>
                                    
                                    <div class="produc">
                        <a href="<?php the_permalink(); ?>" title="add">
                                        <div class="producimgcontent" style="background:url(<?php the_first_image(); ?>);">
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
                                            <div class="col-lg-2 col-md-2 col-sm-2 producaddcart" style="background: #93bb43;">
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
                                    <?php } ?>
                                </div>
                            </div>
                		</li>
                		<?php //} ?>
                		<?php } ?>
                		<?php } ?>
                	</ul>
                </div>
            </div>
        </div>
</div>