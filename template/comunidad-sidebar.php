<?php
/*
    $args = array(
        'post_type' => 'contenidos',
        'pagename' => 'oracion-la-comunidad','galeria-comunidades',
        'posts_per_page'         => 1,
    );
*/
/*====  oranción de la comunidades cristianas ======= */
?>

<?php $the_query = new WP_Query(contenidosPorNombre('contenidos','oracion-la-comunidad',1));  ?>
<div class="contenidos-c oracion">
  <?php
  while ($the_query -> have_posts()){
    $the_query -> the_post();
    the_content( );
  }
  wp_reset_postdata();
  ?>
</div>

<?php /*====  galerrìa de comunidades cristianas ======= */ ?>

<?php $the_query = new WP_Query(contenidosPorNombre('contenidos','galeria-comunidades',1));  ?>
<div class="contenidos-c galeria">
  <?php
  while ($the_query -> have_posts()){
    $the_query -> the_post();
    the_content( );
  }
  wp_reset_postdata();
  ?>
</div>

<?php /*====  documentos-comunidades-cristianas de comunidades cristianas ======= */ ?>

<?php $the_query = new WP_Query(contenidosPorNombre('contenidos','documentos-comunidades-cristianas',1));  ?>
<div class="contenidos-c docs">
  <?php
  while ($the_query -> have_posts()){
    $the_query -> the_post();
    the_content( );
  }
  wp_reset_postdata();
  ?>
</div>

<!-- ***** aqui va lo de las presentaciones -->
<?php $the_query = new WP_Query(contenidosPorNombre('contenidos','presentaciones-comunidades-cristianas',1));  ?>
<div class="contenidos-c galeria">
  <?php
  while ($the_query -> have_posts()){
    $the_query -> the_post();
    the_content( );
  }
  wp_reset_postdata();
  ?>
</div>
