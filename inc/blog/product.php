<section class="container product">
    <div class="row">
        <div class="col-md-12 title-main">
            <h3 class="text-center"><i class="fas fa-circle point"></i>  Productos Relacionados  <i class="fas fa-circle point"></i></h3>
        </div>
        <div class="col-md-4 col-xs-12 product-item">
            <div class="card">
                <div class="card-header">
                    <div class="card-word">
                        <div class="card-word-tag"><span><?php echo strtoupper(get_field('rel-category1', 6));?></span></div>
                        <div class="card-word-name"><span><?php echo strtoupper(get_field('rel-title1', 6));?></span></div>
                    </div>
                    <div class="card-icon">
                        <img src="images/icon/security-blue.png" alt="">
                    </div>
                </div>
                <div class="card-img">
                    <img src="<?php echo get_field('rel-img1', 6);?>" alt="">
                </div>
                <div class="card-footer">
                    <div class="card-footer-descrip"><span>DESCRIPCIÓN</span></div>
                    <div class="card-footer-text"><small><?php echo ucwords(get_field('rel-description1', 6));?></small></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 product-item">
            <div class="card">
                <div class="card-header">
                    <div class="card-word">
                        <div class="card-word-tag"><span><?php echo strtoupper(get_field('rel-category2', 6));?></span></div>
                        <div class="card-word-name"><span><?php echo strtoupper(get_field('rel-title2', 6));?></span></div>
                    </div>
                    <div class="card-icon">
                        <img src="images/icon/security-blue.png" alt="">
                    </div>
                </div>
                <div class="card-img">
                    <img src="<?php echo get_field('rel-img2', 6);?>" alt="">
                </div>
                <div class="card-footer">
                    <div class="card-footer-descrip"><span>DESCRIPCIÓN</span></div>
                    <div class="card-footer-text"><small><?php echo ucwords(get_field('rel-description2', 6));?></small></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 product-item">
            <div class="card">
                <div class="card-header">
                    <div class="card-word">
                        <div class="card-word-tag"><span><?php echo strtoupper(get_field('rel-category3', 6));?></span></div>
                        <div class="card-word-name"><span><?php echo strtoupper(get_field('rel-title3', 6));?></span></div>
                    </div>
                    <div class="card-icon">
                        <img src="images/icon/security-blue.png" alt="">
                    </div>
                </div>
                <div class="card-img">
                    <img src="<?php echo get_field('rel-img3', 6);?>" alt="">
                </div>
                <div class="card-footer">
                    <div class="card-footer-descrip"><span>DESCRIPCIÓN</span></div>
                    <div class="card-footer-text"><small><?php echo ucwords(get_field('rel-description3', 6));?></small></div>
                </div>
            </div>
        </div>
    </div>
</section>