<?php

/*
Template Name: peregrinaciones solo
Template Post Type: post, page, product, peregrinaciones

 */

 get_header();


?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>
    <h2> plantilla peregrinaciones solo.</h2>
    <?php echo get_the_id(); ?>
<!-- *********************************** -->

     <div class="contenido">
      <?php echo "desde page template peregrinaciones"; ?>
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php // the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
	        <!-- h1><?php //   the_title(); ?></h1 -->
          <?php
          $args = array(
          'post_type'=> 'peregrinaciones',
          'post_per_page' => -1

          );

          ?>
           <?php $peregrinaciones = new WP_Query($args); ?>

<?php while($peregrinaciones->have_posts()): $peregrinaciones->the_post(); ?>

<?php /*the_post_thumbnail();*/ ?>
  <?php // the_title(); ?>

      <?php the_field('fecha_de_salida'); ?>
              <?php /* the_field('recorrido');*/ ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('afiche'); ?>" alt="<?php the_field('titulo'); ?>">
              </a>





<?php endwhile; wp_reset_postdata(); ?>
            </div>
      </div>
<!-- **************************************** -->
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section>

<?php
  get_footer();
?>
