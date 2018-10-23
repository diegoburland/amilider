<?php 

function wordlimit($string, $length = 15, $ellipsis = "...")
{
    $words = explode(' ', $string);
    if (count($words) > $length)
    {return implode(' ', array_slice($words, 0, $length)) ." ". $ellipsis;}
    else{return $string;}
}

$args = array('numberposts' => 2,'post_type' => 'post','post_status' => 'publish');
$posts = get_posts($args);
if($posts AND count($posts) > 0){
?>


<section class="container-fluid blog">
    <div class="row row-margin-bottom">
        <div class="col-md-12 title-main">
            <h3 class="text-center"><i class="fas fa-circle point"></i>  Blog  <i class="fas fa-circle point"></i></h3>
        </div>
        <div class="col-md-3 col-xs-12 blog-content">
            <div class="lib-row lib-header">
            <?=ucfirst($posts[0]->post_title)?> 
                <div class="lib-header-seperator"></div>
            </div>
            <div class="lib-row lib-desc">
                <p><?=ucwords(wordlimit($posts[0]->post_excerpt, 15, "..."))?></p>
            </div>
            <div class="div-btn">
                <a class="btn-posts" href="<?=$posts[0]->guid?>">Leer este articulo <i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <img class="lib-img-show img-fluid" src="<?php global $post;
            $thumbID = get_post_thumbnail_id( $posts[0]->ID );
            $imgDestacada = wp_get_attachment_image_src( $thumbID, '300' ); 
            if($imgDestacada[0] != ''){ echo $imgDestacada[0];}else{ echo get_template_directory_uri() . '/images/no-image.jpg';}?>">
        </div>
        <div class="col-md-3 col-xs-12 blog-content">
            <div class="lib-row lib-header">
            <?=ucfirst($posts[1]->post_title)?> 
                <div class="lib-header-seperator"></div>
            </div>
            <div class="lib-row lib-desc">
                <p><?=ucwords(wordlimit($posts[1]->post_excerpt, 15, "..."))?></p>
            </div>
            <div class="div-btn">
                <a class="btn-posts" href="<?=$posts[1]->guid?>">Leer este articulo <i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <img class="lib-img-show img-fluid" src="<?php global $post;
            $thumbID = get_post_thumbnail_id( $posts[1]->ID );
            $imgDestacada = wp_get_attachment_image_src( $thumbID, '300' ); 
            if($imgDestacada[0] != ''){ echo $imgDestacada[0];}else{ echo get_template_directory_uri() . '/images/no-image.jpg';}?>">
        </div>
        
    </div>
</section>
<?php } ?>
<!-- <div class="col-md-6" data-category="view">
    <div class="lib-panel container-fluid">
        <div class="row "">
            <div class="col-md-6">
                <div class="lib-row lib-header">
                <?=ucfirst($posts[0]->post_title)?> 
                    <div class="lib-header-seperator"></div>
                </div>
                <div class="lib-row lib-desc">
                    <p><?=ucwords(wordlimit($posts[0]->post_excerpt, 15, "..."))?></p>
                </div>
                <div class="div-btn">
                    <a class="btn-posts" href="<?=$posts[0]->guid?>">Leer este articulo <i class="far fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</div> -->