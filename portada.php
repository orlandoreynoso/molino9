<?php 
/*
Template Name: Portada
 */
?>
<?php get_header(); ?>
<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>
<section class="info-parroquial">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php include (TEMPLATEPATH . '/libs/infoparroquial.php');  ?>
      </article>          
    </div>
  </div>
</div>  
</section>
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
<section class="recomen">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article> 
        <?php include (TEMPLATEPATH.'/libs/recomendaciones.php');  ?>
      </article>        
    </div>
  </div>
</div>  
</section>
<section class="groupings">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php include (TEMPLATEPATH.'/libs/agrupaciones.php');  ?>
      </article>        
    </div>
  </div>
</div>  
</section>
<?php get_footer(); ?>