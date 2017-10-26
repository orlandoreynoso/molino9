<?php
/*
Template Name: Pastorales category
Template Post Type: post, page, product, Pastorales
 */
 get_header();
?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
        <h2> plantilla Pastorales categoria..okok</h2>
<!-- *********************************** -->

     <div class="contenido">
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php // the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
          <!-- h1><?php //   the_title(); ?></h1 -->

     <h2 class="titulo"><span>Próximos pastorales</span></h2>
 <?php 
 $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
 
 $args = array(
 'post_type' => 'pastorales',
 //'posts_per_archive' => -1,
 'posts_per_page' => -1,
 'order' => 'DESC',
 'orderby' => 'date',
 'paged' => $paged,
 ); ?>
 <?php $pastorales = new WP_Query($args); ?>
 <?php while($pastorales->have_posts() ): $pastorales->the_post(); ?>
 <!-- article -->
 <article id="post-<?php the_ID(); ?>" <?php post_class('grid1-3'); ?>>
 <div class="imagen-destacada">
 <?php echo "<p><b>Fecha: </b>" . get_post_meta( get_the_ID(), 'info_page_fecha', true ) . "</p>"; ?>
 <a class="mas-info"  href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
 </div> <!--.imagen-destacada-->
 

 <div class="clear"></div>
 </article>
 <!-- /article -->
 
 <?php
 
 endwhile;
 
 
 
 
 
 
  wp_reset_postdata();
 ?>
  <ul class="paginacion clear">
            <li>
              <?php       
                  if (function_exists(custom_pagination)) {
                    custom_pagination($pastorales->max_num_pages,"",$paged);
                  } 
              ?>
            </li>
        </ul>


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