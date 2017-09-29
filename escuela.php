<?php 
/*
Template Name: Escuela
Template Post Type: post, page, product
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
          <div class="interiores">
            <?php //  echo  'estoy en page';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
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
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">        
        <div class="e-contenedor">
          <h2>Documentos de la escuela</h2>
          <div class="docs">
            <?php include TEMPLATEPATH.'/libs/plan.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>