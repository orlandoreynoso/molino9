<?php

echo "----------------- ************************************************* \n";

$pname  = 'pequenas-comunidades-cristianas';
$informacion = new WP_Query( array( 'pagename' => 'pequenas-comunidades-cristianas' ) );

/*

echo "<pre>";
var_dump($informacion);
echo "</pre>";
*/
  $variable = get_the_ID();

echo $variable;


function get_pastorales($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
?>
<div class="c-agrupaciones">
    <?php $the_query = new WP_Query(get_pastorales($variable,-1));   ?>
    <?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));    ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="list">
    <div class="todo">
      <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
        <div class="thumb" ><?php the_post_thumbnail('medium'); ?></div>
        <h5><?php the_title(); ?></h5>
      </a>
    </div>
    </div>
    <?php endwhile;?>
</div>


<?php
/********** de aqui hacia arriba pura prueba*/
?>

<?php
echo "----------------- ************************************************* \n";


$page_actually = 348;
$perpage_actually = -1;
$day = $perpage_actually-1;



    $args = array(
        'post_type' => 'page',
        'post_parent'       => 348,
        'posts_per_page'         => -1,
    );

$the_query = new WP_Query($args);

?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <?php // obtener_homilia('Homilias','homilia',$page_actually);  ?>
<div class="actual col-xs-12 col-md-4">
    <?php

    $pageid = get_permalink($page_actually);
    $title = get_the_title($page_actually);
  //  echo $pageid;
    ?>
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
</div>
<?php endwhile;?>
