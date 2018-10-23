<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}


?>

<div id="product-<?php the_ID(); ?>" class="col-md-12">
<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
	?>
	<div class="container-fluid main-single">
		<div class="row">
			<div class="col-md-6 detail-single">
				<?php do_action('wc_single_details')?>
			</div>
			<div class="col-md-6 detail-single-img">
				<?php global $product?>
				<div class="slidePrimaryInt">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<?php
								
								if ($product->is_type( 'variable' )) {
									$product_variations = $product->get_available_variations();
									$nameVariation = $product_variations[0]["attributes"];
									foreach ( $nameVariation as $name => $value ) {
										$nameVariation =  $name;
									}
									foreach ( $product_variations as $variation ) { 
										echo "<div class='carousel-item'><img src='".$variation["image"]['url']."'class='img-responsive center-block' data-big='".$variation["image"]['url']."'></div>";
										}
								}else{
									
									$attachment_ids = $product->get_gallery_attachment_ids();
									if($attachment_ids){
										$c = 0;
										foreach( $attachment_ids as $attachment_id ) {
										$c++;
										$class = ($c == 1) ? 'active' : '';

										echo "<div class='carousel-item ".$class."'><img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block' data-big='".$image_link = wp_get_attachment_url( $attachment_id )."'></div>";
										}
									}else{
										echo "<div class=''><img src='".get_template_directory_uri()."/images/no-image.jpg' class='w-100'>";
									}
									
								}
							?>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<i class="fas arrows fa-angle-left"></i>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							
							<i class="fas arrows fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="container-fluid product-relation">
		<div class="row">
			<div class="col-12">
				<?php
					/**
					 * Hook: woocommerce_after_single_product_summary.
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
					 */
					do_action( 'woocommerce_after_single_product_summary' );
				?>				
			</div>
		</div>
	</div>
	

</div>

