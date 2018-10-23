<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
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
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php if(isset($sin_categoria)){ ?>
<style>
	.content-product .filter-container{
		display: none!important
	}

	.special{
		width: 100%!important
	}

</style>

<?php } ?>
<div class="container content-product">
	<nav class="filter-container">
		<?php wp_nav_menu(array('theme_location'=>'secundary_menu', 'container'=> false,'menu-class' => 'nav-relation')); ?>
	</nav>
	<div class="container-fluid special">
		<div class="row">


	
		
