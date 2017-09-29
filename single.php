<?php

/*
  Template Name: sigle
  Template Post Type: post, page, product
*/

 get_header();

?>


<section class="con-general">

  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-8 con">
            <div class="interiores">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <!-- div class="date-cat">
                <div class="row">
                    <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php the_time('j F, Y'); ?></div>
                    <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
                </div>
              </div -->
              <div class="info">
                <?php //  echo "Esot en el single"; ?>
            <!-- h1><?php //   the_title(); ?></h1 -->
             <?php
              while ( have_posts() ) : the_post();
            //          get_template_part( 'content', 'page' );
              the_content();
              endwhile;
              ?>
              </div>
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

<?php get_footer();  ?>
