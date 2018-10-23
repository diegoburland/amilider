<?php
/* Template Name: Featured Article
   Template Post Type: post, page, product */
 // Wp Estate Pack
get_header();
?>
  
      <?php

    $cat = '23';
       $myarray = query_posts('cat='.$cat.'&orderby;=date&order;=ASC&posts;_per_page=6');
      ?>
    <section class="all-post">
    <div class="container">
        <div class="row">
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) { the_post(); ?>
                    <div class="col-md-4 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-img">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id());?>" alt="">
                                </div>
                                <div class="post-title">
                                    
                                    <h3> <a href="<?php echo get_permalink(); ?> "><?php echo the_title(); ?></a></h3>
                                </div>
                                <div class="post-content">
                                    <p><?php echo the_excerpt(); ?></p>
                                </div>
                                <div class="post-more">
                                    <a href=" <?php echo get_permalink(); ?> " class="btn btn-db">Leer mas..</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

               <?php } ?>
                    <?php }else{?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4>No hay articulos de blog disponibles...</h4>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
        </div>
    </div>
    </section>
    
 
       
       

<?php get_footer(); ?>
