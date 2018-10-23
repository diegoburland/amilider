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

<style>
	.content-product{
		display: flex;
		text-align: center
	}

	.item-product{
		margin-bottom: 20px
	}

	.content-product h2{
		font-size: 12px;
		text-transform: uppercase
	}

	.woocommerce-result-count{
		display: none
	}
	.content-product .filter-container{
		width: 10%;
		height: auto;
		display: inline-block;
		padding-right: 10px
	}

	.content-product .filter-container .item-filter{
		padding: 2px;
		margin: 0;
		margin-bottom: 10px;
		border-bottom: solid 2px rgba(0,0,0, 0.3);
		text-align: center;
		width: 100%;
		height: 80px;
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #FFF;
		cursor: pointer;
		transition: all .3s ease-in-out 
	}

	.content-product .filter-container .item-filter i{
		font-size: 25px
	}

	.content-product .filter-container .item-filter:hover{
		background: #012684
	}

	.content-product .filter-container .item-filter:hover i{
		color: #ffffff;
	}
	.content-product .filter-container .item-filter:hover i{
		color: #ffffff;
	}

	.content-product .filter-container .item-filter:hover small{
		color: #ffffff;
	}

	.content-product .filter-container .item-filter:hover

	button.product_type_simple.add_to_cart_button.ajax_add_to_cart{
		display: none
	}

	.item-filter small{
		font-size: 10px
	}

	.special{
		display: inline-block;
		width: 90%
	}
	

</style>


<div class="container content-product">
	<nav class="filter-container">
		<ul>
			<li class="item-filter current-menu-item">
				<a href="<?php echo get_field('url2', 6);?>">
					<div style="margin: 0">
						<div>
							<i class="fas fa-headphones"></i>
						</div>
						<div>
						<small>AUDIO</small>
						</div>
					</div>
				</a>
			</li>
			<li class="item-filter current-menu-item">
				<a href="<?php echo get_field('url6', 6);?>">
					<div style="margin: 0">
						<div>
							<i class="fas fa-charging-station"></i>
						</div>
						<div>
						<small>CABLE CARGADORES</small>
						</div>
					</div>
				</a>
			</li>
			<li class="item-filter current-menu-item">
				<a href="<?php echo get_field('url1', 6);?>">
					<div style="margin: 0">
						<div>
							<i class="fas fa-database"></i>
						</div>
						<div>
						<small>HOLDER</small>
						</div>
					</div>
				</a>
			</li>
			<li class="item-filter current-menu-item">
				<a href="<?php echo get_field('url3', 6);?>">
					<div style="margin: 0">
						<div>
							<i class="fas fa-mobile"></i>
						</div>
						<div>
						<small>ESTUCHERIA</small>
						</div>
					</div>
				</a>
			</li>
			<li class="item-filter current-menu-item">
				<a href="<?php echo get_field('url5', 6);?>">
					<div style="margin: 0">
						<div>
							<i class="fab fa-usb"></i>
						</div>
						<div>
						<small>MEMORIAS</small>
						</div>
					</div>
				</a>
			</li>
		</ul>
	</nav>
	<div class="container-fluid special">
		<div class="row">


	
		
