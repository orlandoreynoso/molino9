<?php 



/*

  Template Name: pagina para peregrinaciones
  Template Post Type: post, page, product, peregrinaciones

*/



 get_header();



?>





<section class="con-general">



  <div class="container">

     <div class="row">

          <div class="col-xs-12 col-md-8 con">

          <div class="titulo">

            <div class="mapeo"><?php the_breadcrumb(); ?></div>

          </div>
		  

          	<?php echo 'estoy en pagina de peregrinaciones'; ?>

            <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>



           <div class="contenido">

                  <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                  <div class="date-cat">

                    <div class="row">

                        <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php the_time('j F, Y'); ?></div>

                        <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>

                    </div>

                  </div>

                  <div class="thumb">

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>              

                  </div>

                  <div class="info"><?php the_excerpt();  ?></div>

            </div>   





          <?php endwhile; ?>

          <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>

          <?php else : ?>

          <p><?php _e('Ups!, no hay entradas.'); ?></p>

          <?php endif; ?>

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