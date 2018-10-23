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

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
	?>

	<div class="row">
		<br><br>
		<div class="col-md-6">
			<div class="galleryProductHold">
			<?php 
				 global $product;
				// $attachment_ids = $product->get_gallery_attachment_ids();
		  //   foreach( $attachment_ids as $attachment_id ) {
		  //       echo "<img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block'>";
		  //   }
			//do_action( 'woocommerce_before_single_product_summary' );
			 ?>
			 <!-- <img id="gear" class="img-responsive center-block" src="<?php // the_post_thumbnail_url(); ?>" alt="" data-big="<?php //the_post_thumbnail_url(); ?>"> -->
			
			
			<div class="slidePrimaryInt" style="position: relative;">
			 	<?php
			 	/* 
			 		$attachment_ids = $product->get_gallery_attachment_ids();
		     	foreach( $attachment_ids as $attachment_id ) {
		         echo "<img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block' data-big='".$image_link = wp_get_attachment_url( $attachment_id )."'>";
		  		}
		  		*/
		  	

		  		if ($product->is_type( 'variable' )) {
		  			$product_variations = $product->get_available_variations();
			  		$nameVariation = $product_variations[0]["attributes"];
			  		foreach ( $nameVariation as $name => $value ) {
			  			$nameVariation =  $name;
			  		}
			  		foreach ( $product_variations as $variation ) { 
					    echo "<img src='".$variation["image"]['url']."'class='img-responsive center-block' data-big='".$variation["image"]['url']."'>";
						}
		  		}else{
		  			$attachment_ids = $product->get_gallery_attachment_ids();
			     	foreach( $attachment_ids as $attachment_id ) {
			         echo "<img src='".$image_link = wp_get_attachment_url( $attachment_id )."'class='img-responsive center-block' data-big='".$image_link = wp_get_attachment_url( $attachment_id )."'>";
			  		}
		  		}
			 	?>
			 </div>
			 <div class="slideSecundaryIn">
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
			</div>

			


			</div>
		</div>
		<div class="col-md-6 infoProduct">
			<h2 class="gTitleC"><?php the_title(); ?></h2>
			<div class="descriptionProduct">
				<?php the_content(); ?>
			</div>
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
				do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>
	
	<!-- Fixed Product -->
	<div class="row productFixed">
		<div class="col-md-12">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="">
		</div>
		<div class="col-md-12 infoProduct">
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
	</div>
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
