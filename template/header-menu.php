<div class="e-menu">
  <nav class="navbar navbar-expand-lg navbar-light">
    <?php get_template_part( 'template/header','buscador'); ?>
    <?php // get_template_part( 'template/header','menuresponsivo'); ?>
    <?php get_template_part( 'template/header','menumovil'); ?>
  </nav>
    <!-- Menu exclusivo para  moviles-->

  <!-- Menu exclusivo para excritorio mayores a de 640 pixeles al infinito -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar-me">
          <?php showMenuboostrap(); ?>
        </nav>
      </div>
    </div>
  </div>
</div>
