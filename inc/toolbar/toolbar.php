<header >
    <div class="container-fluid headband">
        <div class="row">
        <div class="col-md-3 col-sm-4"><i class="fas fa-map-marker-alt"></i> <span><?php echo get_field('direccion', 6);?></span></div>
            <div class="col-md-6 col-sm-4"><i class="fas fa-phone"></i> <span><?php echo get_field('telefono', 6);?></span></div>
            <div class="col-md-3 col-sm-4"><a href="<?php echo get_field('facebook', 6);?>"><i class="fab fa-facebook-f"></i></a>&nbsp   <a href="<?php echo get_field('instagram', 6);?>"><i class="fab fa-instagram"></i></a></div>
        </div>
    </div>
    <nav class="navbar  navbar-expand-lg navbar-light top-navbar navbar-db sticky-top" data-toggle="sticky-onscroll">
        <div class="container-nav">
            <div class="brand-logo">
                <a class="" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() . '/images/logo-amilider.png' ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="brand-menu">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu( array(
                        $args, $default
                        ) );
                    ?>

                </div>
            </div>
        </div>
    </nav>

</header>

<div class="network-top">
    <ul>
        <li class="instagram"><a href="<?php echo get_field('instagram', 6)?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon/instagram.png' ?>" alt="logo de instagram"></a></li>
        <li class="facebook"><a href="<?php echo get_field('facebook', 6)?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon/facebook.png' ?>" alt="logo de facebook"></a></li>
        <li class="whatsapp"><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/icon/whatsapp.png' ?>" alt="logo de whatsapp"></a></li>
    </ul>
</div>
