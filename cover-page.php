<?php
/*
Template Name: coverPage Santa rita
 */
?>
<?php get_header(); ?>

<div class="slide">
  <?php get_template_part( 'template/cover', 'slide') ?>
</div>
<?php // get_template_part( 'template/cover', 'inicio') ?>

<?php // get_template_part( 'template/cover', 'slide') ?>
<section class="m-iparroquial m-gris">
  <?php get_template_part( 'template/cover', 'infoparroquial') ?>
</section>

<section class="m-contenido-secciones">
  <?php get_template_part( 'template/cover', 'contenido') ?>
</section>

<!-- section class="m-entradas-recientes">
  <?php // get_template_part( 'template/cover','recomendaciones' ); ?>
</section -->

<!-- section class="m-entradas-recientes m-gris">
  <?php // get_template_part( 'template/cover','entradasrecientes' ); ?>
</section -->

<section class="msc-agrupaciones">
  <?php get_template_part( 'template/cover', 'agrupaciones') ?>
</section>


<?php get_footer(); ?>
