<?php 

function wordlimit($string, $length = 15, $ellipsis = "...")
{
    $words = explode(' ', $string);
    if (count($words) > $length)
    {
            return implode(' ', array_slice($words, 0, $length)) ." ". $ellipsis;
    }
    else
    {
            return $string;
    }
}

$args = array(
    'numberposts' => 2,
    'post_type' => 'post',
    'post_status' => 'publish'
);

$posts = get_posts($args);

?>


<?php 

if($posts AND count($posts) > 0){
    print_r($posts)
?>



<section class="container blog">
    <div class="row row-margin-bottom">
        <div class="col-md-12 title-main">
            <h3 class="text-center"><i class="fas fa-circle point"></i>  Blog  <i class="fas fa-circle point"></i></h3>
        </div>
        <div class="col-md-6 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6 cont">
                        <div class="lib-row lib-header">
                            <?=ucfirst($posts[0]->post_title) ?>
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="lib-img-show" src="images/iphone-skin.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6 cont">
                        <div class="lib-row lib-header">
                        <?=ucfirst($posts[1]->post_title)?> 
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            <p><?= wordlimit($posts[1]->post_excerpt, 15, "...")?></p>
                        </div>
                        <a class="btn-posts" href="<?=$posts[1]->guid?>">Leer este articulo</a>
                    </div>
                    <div class="col-md-6">
                        <img class="lib-img-show img-fluid" src="<?php global $post;
                        $thumbID = get_post_thumbnail_id( $posts[1]->ID );
                        $imgDestacada = wp_get_attachment_image_src( $thumbID, '300' ); 
                        if($imgDestacada[0] != ''){ echo $imgDestacada[0];}else{ echo get_template_directory_uri() . '/images/no-image.jpg';}?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</section>
<?php } ?>