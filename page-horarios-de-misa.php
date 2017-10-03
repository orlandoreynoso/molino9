<?php
/*
  Template Name: Pagina Horarios de Misa
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 con">
        <div class="interior-horarios-misa">
          <div class="header-title">
            <div class="titulo">
              <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
            </div>
            <div class="titulos-page">
              <?php the_title(); ?>
            </div>
          </div>
          <div class="horarios">
            <?php get_template_part( 'template/horarios','misa') ?>
          </div>
          <div class="contenidos">
            <?php get_template_part( 'template/horarios','contenidos') ?>
          </div>
        </div><!-- Fin interior-horarios-misa -->
      </div><!-- fin con -->
    </div>
  </div>
</section>
<?php get_footer();  ?>
