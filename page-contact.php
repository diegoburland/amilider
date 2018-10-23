<?php
/* Template Name: My Custom Page Contact */

    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php require get_template_directory() . '/inc/slider/slider.php';?> 
        </div>
        <div class="col-12 title-main">
            <h3> <i class="fas fa-circle point"></i> Contactanos <i class="fas fa-circle point"></i></h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-xs-12">
        <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contact") ) : ?>
 <?php endif; ?>
        </div>
        <div class="col-md-7 col-xs-12">
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1179.1034998255018!2d-75.56040604467056!3d6.261671624903811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428ef0fb12c75%3A0xc581cf44c4181f40!2sCl.+65+%2349-30%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses!2sco!4v1540307412175" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>

 <?php
get_footer();