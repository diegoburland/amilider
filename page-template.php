<?php
/* Template Name: My Custom About */


get_header(); ?>



<div class="container-fluid about-fluid">
<div class="container about">
	<div class="row">
		<div class="col-12">
			<?php require get_template_directory() . '/inc/slider/slider.php';?> 
		</div>
		<div class="col-12 title-main">
			<h3> <i class="fas fa-circle point"></i> Quienes Somos <i class="fas fa-circle point"></i></h3>
		</div>
		<div class="col-12 icon-pages text-center">
			<img src="<?php echo get_template_directory_uri() .'/images/icon/mountain.png'; ?>" class="img-fluid" alt="">
		</div>
		<div class="col-md-6 col-xs-12 about-a">
			<div class="pages-content">
				<h4>MISIÓN</h4>
				<p>
					AMILIDER SAS, tiene como propósito principal ofrecer al usuario un producto de Alta Calidad que se ajusta 
					a la medida y necesidad requerida, de la mano con nuestro fin social importamos accesorios móviles que le
					 brindan una excelente experiencia al usuario tanto en usabilidad como en rendimiento.
					Innovación, esfuerzo y profesionalismo cualidades que nos identifican como contribuyentes al emprendimiento
					, Y nos consolida en el País como Líder en Accesorios Móviles.

				</p>
			</div>
		</div>
		<div class="col-md-6 col-xs-12 about-b">
			<div class="pages-content">
				<h4>VISIÓN</h4>
				<p>
				Para AMILIDER S.A.S.  para el año 2022 nuestra Empresa AMILIDER S.A.S tendrá presencia a NIVEL INTERNACIONAL, 
				abriendo mercado en Perú y Chile,  Será reconocida tanto por su excelente calidad, buen servicio y precios 
				accesibles, convirtiéndonos así en la primera y mejor opción para nuestros clientes y consumidores por medio
				 de la utilización de la tecnología, la innovación y la atención al cliente.

				</p>
			</div>
		</div>

	</div>
</div>
</div>   

 

<?php
get_footer();
