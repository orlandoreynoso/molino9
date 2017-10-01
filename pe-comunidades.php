<?php
/*
  Template Name: Pequeñas comunidades cristianas
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8 con">
        <div class="interiores-comunidad">
          <div class="header-title">
            <div class="titulo">
              <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
            </div>
            <div class="titulos-page">
              <?php the_title(); ?>
            </div>
          </div>
          <?php get_template_part( 'template/comunidad','contenido') ?>
        </div>
        <!-- div class="col-md-12 con" -->
          <?php get_template_part( 'template/comunidad','comunidades') ?>
        <!-- /div -->
      </div><!-- finaliza el cuadro principal -->
      <div class="col-xs-12 col-md-4 side-comunidades">
        <div class="entradas">
            <?php get_template_part( 'template/comunidad','sidebar') ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();  ?>
