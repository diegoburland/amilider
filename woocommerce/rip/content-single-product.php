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
<div id="product-<?php the_ID(); ?>" class="col-md-12	">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.firt-slider:first-child').addClass('active')
	})
</script>
<div class="container main-single">
	<div class="row">
		<div class="col-md-6 infoProduct">
				
				<?php
					do_action('wc_single_details');
					/**
					 * Hook: Woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					
					the_title( '<h2 class="product_title entry-title">', '</h2>' );
					// the_excerpt('<p class="product_excerpt entry-excerpt">', '</p>');
					// do_action('wc_single_details_more');
				?>
				
				<!-- <div class="productFixed">
					<div class="infoProduct">
						<h2 class="gTitleC"><?php the_title(); ?></h2>
						<?php
							/**
							 * Hook: Woocommerce_single_product_summary.
							 *
							 * @hooked woocommerce_template_single_title - 5
							 * @hooked woocommerce_template_single_rating - 10
							 * @hooked woocommerce_template_single_price - 10
							 * @hooked woocommerce_template_single_excerpt - 20
							 * @hooked woocommerce_template_single_add_to_cart - 30
							 * @hooked woocommerce_template_single_meta - 40
							 * @hooked woocommerce_template_single_sharing - 50
							 * @hooked WC_Structured_Data::generate_product_data() - 60
							 */
							//do_action( 'woocommerce_single_product_summary' );
						?>
						<button type="button" id="topProduct">Añadir al carrito</button>
					</div>
				</div> -->
			</div>
		
		<div class="col-md-6">
		
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
									foreach( $attachment_ids as $attachment_id ) {
									echo "<div class='carousel-item firt-slider'><img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block' data-big='".$image_link = wp_get_attachment_url( $attachment_id )."'></div>";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		

	</div>
</div>	
			
			 

			 
				<!-- <div class="slideSecundaryIn" style="background: yellow">
					<?php 
					/*
					foreach( $attachment_ids as $attachment_id ) {
					echo "<img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block'>";
					}
					*/
					if ($product->is_type( 'variable' )) {
						foreach ( $product_variations as $variation ) {
							echo "<img id='".$variation["attributes"][$nameVariation]."' src='".$variation["image"]['url']."'class='img-responsive center-block'>";
							}
					}else{
						foreach( $attachment_ids as $attachment_id ) {
					echo "<img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block'>";
						}
					}
					?>
				</div> -->
	<!-- End Fixed Product -->

	<div class="row myRelate">
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

<?php do_action( 'woocommerce_after_single_product' ); ?>
