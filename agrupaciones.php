<?php
/*
  Template Name: Agrupaciones
  Template Post Type: post, page, product, agrupaciones
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
              <?php

                $pagina_id = get_the_ID();
                /*

            echo $variable;

            echo "<pre>";
            var_dump($variable);
            echo "</pre>"; */

              ?>
          <div class="agrupaciones-desglose">
            <?php // echo "template pastorales"; ?>
                <div class="c-agrupaciones">
                  <?php $the_query = new WP_Query(contenidosPorId('page',$pagina_id,-1)); ?>
                  <?php /*
                  <div class="titulo-pastorales">
                  	<h3><?php $nombre = the_title(); ?></h3>
                  </div>
                  */  ?>

                    <?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));    ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="list">
                    <div class="todo">
                      <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
                        <div class="thumb" >
                      <?php /*==============*/

                      if(has_post_thumbnail()){
                        the_post_thumbnail('medium');
                      }
                      else{ ?>
                        <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
                      <?php }
                      ?>
                      </div>

                        <?php /*==============*/ ?>
                        <h5><?php the_title(); ?></h5>
                      </a>
                      <!-- div class="exe"><?php // excerpt('15'); ?> </div -->
                    </div>
                    </div>
                    <?php endwhile;?>
                </div>
          </div>
            <?php //  echo  'estoy en page';      ?>
            <?php /*
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;  */
            ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
