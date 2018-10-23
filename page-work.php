<?php
/* Template Name: My Custom Page Work */

    get_header();
?>

<div class="container work">
    <div class="row">
        <div class="col-12">
            <?php require get_template_directory() . '/inc/slider/slider.php';?> 
        </div>
        <div class="col-12 title-main">
            <h3> <i class="fas fa-circle point"></i> Trabaja con Nosotros <i class="fas fa-circle point"></i></h3>
        </div>
        <div class="col-md-6 col-xs-12">
        <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Work1") ) : ?>
    <?php endif; ?>
        </div>
        <div class="col-md-6 col-xs-12">
        <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Work2") ) : ?>
    <?php endif; ?>
        </div>
        <div class="col-md-12">
            <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("CV") ) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>

 <?php
get_footer();