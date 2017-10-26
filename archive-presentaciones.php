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
          <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <?php // echo "estoy en pagina de archivos presetanciones" ?>
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>

            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(

            'post_type' => 'presentaciones',
            'posts_per_archive' => -1,
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged
            ); ?>


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
                  <?php $the_query = new WP_Query($args); ?>
                  <?php /*
                  <div class="titulo-pastorales">
                  	<h3><?php $nombre = the_title(); ?></h3>
                  </div>
                  */  ?>

                              <?php if ( have_posts() ) : ?>

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
                  <?php endwhile; ?>

                <?php /*
                    <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
*/ ?>

<ul class="paginacion clear">
<?php /*
          <li>

            <?php

                if (function_exists(custom_pagination)) {

                  custom_pagination($pastorales->max_num_pages,"",$paged);

                }

            ?>

          </li>
      </ul>
*/ ?>
<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
                  <?php wp_reset_postdata(); ?>
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
       </div>
    </div>
  </div>
</section>

<?php /*=========================================*/ ?>




<?php get_footer();  ?>
