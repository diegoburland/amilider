<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- bootstrap -->
    <link rel="stylesheet" href="http://pagarenlinea.com/amilider/wp-content/themes/amilider/css/bootstrap/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="http://pagarenlinea.com/amilider/wp-content/themes/amilider/css/style.css">
	
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php require get_template_directory() . '/inc/toolbar/toolbar.php';?> 

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>



<div class="container-fluid bread">
    <div class="container breadcrumbx">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
        </div>
    </div>
</div>
	<div class="site-content-contain">
		<div id="content" class="site-content">
            
        