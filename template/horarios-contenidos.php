<?php

global $post;

//echo $post->post_name;
/*            echo "******";

echo the_ID();
echo "------";
echo esc_html( get_the_title() ); */


?>
  <?php


  $tipo = 'page';
  $idPagina =  get_the_id();
  $namePagina =  'agrupaciones/pastoral-de-liturgia/ornamentos-de-la-misa/';
  $cantidad = '-1';

  ?>
  <?php// echo get_page_template_slug( $variable );  indica el template que uso?>
<div class="agrupaciones-desglose">
      <div class="c-agrupaciones">
        <h2>Contenidos de interés</h2>

        <?php $the_query = new WP_Query(contenidosPorNombre($tipo,$namePagina,$cantidad));   ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="list">
        <div class="todo">
          <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
            <div class="thumb" >
              <?php
              if(has_post_thumbnail()){
                the_post_thumbnail('full');
              }
              else{ ?>
                <img class="attachment-full size-full wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
              <?php }       ?>
            </div>
            <h5><?php the_title(); ?></h5>
          </a>
          <!--div class="exe"><?php // excerpt('15'); ?> </div -->
        </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>


          <?php $the_query = new WP_Query(contenidosPorId($tipo,$idPagina,$cantidad));   ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="list">
          <div class="todo">
            <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
              <div class="thumb" ><?php the_post_thumbnail('full'); ?></div>
              <h5><?php the_title(); ?></h5>
            </a>
            <!--div class="exe"><?php // excerpt('15'); ?> </div -->
          </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>

      </div>
</div>
