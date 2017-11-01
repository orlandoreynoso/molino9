<?php
/*
  Template Name: archivo para peregrinaciones
  Template Post Type: post, page, product, peregrinaciones
*/
 get_header();
?>

<?php /*===================================== */ ?>
<section class="con-general">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <?php // echo "estoy en pagina de archivos presetanciones" ?>
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php post_type_archive_title(); ?>
              </div>
            </div>

            <?php   $pagina_id = get_the_ID();            ?>

            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
              'post_type' => 'presentaciones',
              'posts_per_page' => 6,
              'order' => 'DESC',
              'orderby' => 'date',
              'paged' => $paged,
            );

            ?>

          <?php $presentaciones = new WP_Query($args); ?>

          <div class="presentaciones-desglose">
            <?php // echo "template pastorales"; ?>
                <div class="c-presentaciones">

                    <?php if ( have_posts() ) : ?>
                    <?php while($presentaciones->have_posts() ): $presentaciones->the_post(); ?>
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
                        <h5><?php the_title(); ?></h5>
                        <?php echo get_the_title(); ?>
                        <?php echo "<p><b>Fecha: </b>" . get_post_meta( get_the_ID(), 'info_page_fecha', true ) . "</p>"; ?>

                      </a>
                    </div>
                    </div>
                  <?php endwhile; ?>
                  <div class="navigationpresentaciones">
                  <?php
                  $big = 999999999; // need an unlikely integer

                   echo paginate_links( array(

                      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $presentaciones->max_num_pages

                  ) );

                   ?>
                   </div>
                  <?php wp_reset_postdata(); ?>
                  <?php /*
                  <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
                  */ ?>
                    <?php else : ?>

                    <p><?php _e('Ups!, no hay entradas.'); ?></p>

                    <?php endif; ?>

                </div>
          </div>
            <?php //  echo  'estoy en page';      ?>
            <?php /*
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;  */
            ?>
          </div>
       </div><!-- FINALIZA DIV DE CONTENIDOS  -->

       <div class="col-xs-12 col-md-4 side">
         <div class="entradas">
           <div class="titulo_entradas">
             <h3>Entradas recientes</h3>
           </div>
           <div class="recientes">
             <?php get_sidebar(); ?>
           </div>
         </div>
       </div>

    </div>
  </div>
</section>

<?php /*=========================================*/ ?>




<?php get_footer();  ?>
