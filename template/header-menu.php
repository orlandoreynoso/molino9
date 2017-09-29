<div class="e-menu">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="col-xs-12  col-sm-4 col-md-6">
      <div class="sm">
        <div class="ubicacion">
          <span class="icon fa fa-map-marker"></span>
          <span id="texto">Mixco, Guatemala</span>
        </div>
        <div class="search"><?php  get_search_form(); ?></div>
      </div>
    </div>
    <?php logoMovil(); ?>
    <button class="navbar-toggler navbar-toggler-right text-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php showMenuboostrap(); ?>
    </div>
  </nav>
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
