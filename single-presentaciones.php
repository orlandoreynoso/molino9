<?php

/*
Template Name: Single peregrinaciones
Template Post Type: post, page, product, peregrinaciones
 */

 get_header();

?>

<?php /*==============================*/ ?>

<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php // echo  'estoy en page';      ?>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
            echo "<p><b>Presentación del mes de: </b>" . get_post_meta( get_the_ID(), 'msc_campos_presentaciones_mes', true ) . "</p>";

              endwhile;
            ?>
          </div>
       </div>
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

<?php  /*============ fin fin ===================*/ ?>

<?php
  get_footer();
?>
