<?php
/**
*  $long es una variable para indicar de cuantos caracteres de
*   longitud queremos nuestro extracto
*/
function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    echo $excerpt;
}

$more_strings = array('Leer mas…','Sigue leyendo…', '¡Espera! Hay mas…', 'Leer el resto del artículo…');
function ultimas_entradas(){
    $args=array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'ASC',
    'posts_per_page' => '10',
    //'post_parent__not_in' => '930,2639,1326,1300',
);
  // The Query
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="list">
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
        <?php }} else {
        echo 'No hay artículos';
    // no se encontraron artículos
}
/* Restore original Post Data */
wp_reset_postdata();
}
/*=====================================*/
function ultimas_paginas(){
/*==================================*/
    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args_10 = array(
        //Post & Page Parameters
        'post__not_in' => array(214),
        'post_parent__not_in'  => array(214),
        'post_type' => 'any',
        'post_status' => 'publish',
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => 7,
        'posts_per_archive_page' => 10,
    );
// $query = new WP_Query( $args_10 );
$args5 =array(
// post_parent
'post__not_in' => array('930,1326,1300,2639'),
'post_type' => 'page',
'post_status' => 'publish',
'orderby' => 'ASC',
'posts_per_page' => '5',
);
  // The Query
$the_query = new WP_Query( $args_10);
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="list">
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
        <?php }} else {
        echo 'No hay artículos';
    // no se encontraron artículos
}
/* Restore original Post Data */
 wp_reset_postdata();
}
function obtener_categoria($nombre,$id){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo; </h3>
            <h3><?php the_category(); ?></h3>
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>
    </div>
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt();
}
function obtener_pagina($nombre,$id){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo;</h3>
            <!-- h3><?php the_category(); ?></h3 -->
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>
    </div>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();
}
function create_query($categoria, $perpage){
    $args = array(
                'cat' => ''.$categoria.'',
                'posts_per_page' => ''.$perpage.'',
    );
    return $args;
}
function create_page_two($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'page_id'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
/*==================================*/
function get_laterales($pagina,$perpage, $titulo, $clase){
    ?>
        <?php $the_query = new WP_Query(create_page_two($pagina,$perpage));   ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="diario">
              <div class="contenido"><?php obtener_categoria(''.$titulo.'',''.$clase.'');  ?></div>
            </div>
        <?php endwhile;?>
    <?php
}
/*==================================*/
function create_page($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
function dia($numero){
switch ($numero) {
    case '1':
        echo 'LUNES';
        break;
    case '2':
        echo 'MARTES';
        break;
    case '3':
        echo 'MIÉRCOLES';
        break;
    case '4':
        echo 'JUEVES';
        break;
    case '5':
        echo 'VIERNES';
        break;
    default:
        echo '>>';
        break;
}
}
function get_agrupaciones($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
/*======================================*/
function get_recomendaciones($pagina,$perpage, $titulo, $clase){
    ?>
        <?php $the_query = new WP_Query(get_agrupaciones($pagina,$perpage));   ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="diario">
              <div class="contenido"><?php obtener_categoria(''.$titulo.'',''.$clase.'');  ?></div>
            </div>
        <?php endwhile;?>
    <?php
}
function create_array($page,$perpage){
     $array = array(
        'post_type' => 'page',
        'post_parent'       => ''.$page.'',
        'posts_per_page'         => ''.$perpage.'',
    );
     return $array;
}
function get_recomendaciones_home($page,$perpage,$nombre){
    ?>
    <?php
    $the_query = new WP_Query(create_array($page,$perpage));
        $id = get_permalink($page);
        $title = get_the_title($page );
         while($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="list">
            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <div class="label"><i class="icon-file fa fa-file"></i><a href="<?php echo $id; ?>" class="cat"><?php echo $title;  ?></a></div>
            <div class="exe"><?php the_excerpt(); ?> </div>
        </div>
    <?php
      endwhile;
}

/*======================================*/


function get_recomendaciones_ihome($page,$perpage,$nombre){
    ?>
    <?php
    $the_query = new WP_Query(create_array($page,$perpage));
        $id = get_permalink($page);
        $title = get_the_title($page );
         while($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="lista">
            <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <h5><a href="<?php echo $id; ?>" class="cat"><?php echo $title;  ?></a></h5>
            <div class="exe"><?php excerpt('20'); ?> </div>
        </div>
    <?php
      endwhile;
}


function get_recomendaciones_iname($pagename){
    ?>
    <?php
    $the_query = new WP_Query(create_pagename($pagename));
        $id = get_permalink($page);
        $title = get_the_title($page );
         while($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="lista">
            <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <h5><a href="<?php the_permalink(); ?>" class="cat"><?php the_title();  ?></a></h5>
            <div class="exe"><?php excerpt('20'); ?> </div>
        </div>
    <?php
      endwhile;
}

/*======================================*/
function create_pagename($pagename){
    $array = array(
        'pagename' => ''.$pagename.''
        );
    return $array;
}
function get_recomendaciones_name($pagename){
    ?>
    <?php
    $the_query = new WP_Query(create_pagename($pagename));
        $id = get_permalink($page);
        $title = get_the_title($page );
         while($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="list">
            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <div class="label"><i class="icon-file fa fa-file"></i><a href="<?php the_permalink(); ?>" class="cat"><?php the_title();  ?></a></div>
            <div class="exe"><?php the_excerpt(); ?> </div>
        </div>
    <?php
      endwhile;
}
?>
