<?php

/*
Template Name: Single boletines
Template Post Type: post, page, product, peregrinaciones, boletines
 */

 get_header();

?>

 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <?php echo "Desde el single de boletines.....ok"; ?>
      <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
<!-- *********************************** -->

     <div class="contenido">
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php //  the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
	         <?php while ( have_posts() ) : the_post();  ?>

            <h2 class="p-titulo"><?php the_field('titulo');  ?></h2>
            <div class="p-descripciones">
              <p><strong>Fecha: </strong>del <?php the_field('fecha'); ?></p>
              <p><strong>Visitando las ciudades: </strong><?php the_field('ciudades'); ?></p>
              <p><strong>Incluye: </strong><?php the_field('incluye'); ?></p>
              <p><strong>Guía espiritual: </strong><?php the_field('guia'); ?></p>
              <p><strong>Contáctanos al: </strong><?php the_field('telefono1'); ?> / <?php the_field('telefono2'); ?></p>
            </div>
            <h2 class="p-itinerario">Itinerario</h2>
            <p class="p-recorrido"><?php the_field('recorrido');  ?></p>
            <?php

            /*

	          the_content();

            $formato = "d F,Y";
        		$fecha = strtotime(get_field('fecha_de_salida'));

        		$fecha_salida = date_i18n($formato, $fecha);


 echo $fecha_salida;   */?>
        <h2 class="p-itinerario">afiche publicitario</h2>
        <img src="<?php the_field('afiche'); ?>" >
        <h2 class="p-itinerario">Galería fotográfica</h2>
        <div class="p-galeria"><?php the_content(); ?></div>
        
<?php      endwhile;         ?>
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
