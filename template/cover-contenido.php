<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6">
      <div class="titulos-general">
        <h3 class="titulos-general">Recomendaciones</h3>
      </div>
      <article class="listado-entradas">
          <?php
            ContenidoHijoPost(1294,1); /*Reflexiones Sacerdotales*/
            contenidoPaginaPorNombre('conozca-guatemala');
            ContenidoHijoPost(692,1); /* Presentaciones */
            contenidoPaginaPorNombre('atrio');
          ?>
      </article>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
      <div class="titulos-general">
        <h3 class="titulos-general">Entradas recientes</h3>
      </div>
      <article class="listado-entradas">
        <?php mscEntradasRecientes();  ?>
      </article>
    </div>
  </div>
</div>
