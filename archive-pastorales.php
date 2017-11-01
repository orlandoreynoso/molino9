<?php
/*
Template Name: Pastorales category
Template Post Type: post, page, product, Pastorales
 */
 get_header();
?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
        <h2> plantilla Pastorales categoria..okok</h2>
<!-- *********************************** -->

     <div class="contenido">
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php // the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
          <!-- h1><?php //   the_title(); ?></h1 -->

     <h2 class="titulo"><span>Próximos pastorales</span></h2>

<?php 

global $wpdb;

/*$query = "SELECT p.ID, p.post_title, p.post_content
                FROM $wpdb->posts
                LEFT JOIN $wpdb->postmeta pm ON p.ID = pm.post_id
                WHERE p.post_type = 'pastorales'"; */

//número de filas obtenidas
//$rows = count($wpdb->get_results($query, ARRAY_A));

//$paged          = get_query_var('paged') ? get_query_var('paged') : 1; //en php 7 get_query_var('paged') ?? 1;


// Verificar: $max_num_pages  = ceil($rows / $post_per_page); //número de páginas redondeado alto

//seteamos found_posts
//$wp_query->found_posts = $rows;

// número de páginas
//VErificar $wp_query->max_num_pages = $max_num_pages;

//finalizamos la query con el limit y el offset
//$limit_query = " LIMIT ".$post_per_page." OFFSET ".$offset;

//obtenemos los resultados paginados
//$result =   $wpdb->get_results($query.$limit_query,OBJECT);// return OBJECT

?>
     <br>
 <?php   




    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
     
/*
     
    $dato =  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
*/
    $max_num_pages = $wp_query->max_num_pages;
    $max_num_pages = $post_per_page;

     $args = array(
       'post_type' => 'pastorales',
       'posts_per_archive' => -1,
       'posts_per_page' => 3,
       'order' => 'DESC',
       'orderby' => 'date',
       'paged' => $paged
     ); 


      $pag_args = array(
        'total' => $total,
        'current' => $current,
        'type' => 'list'
      );
       

      $pags_list = paginate_links($pag_args);
      



 ?>

 <?php $pastorales = new WP_Query($args); ?>
 
 <p>Veamos</p>
 <?php var_dump(  get_query_var('paged') ); 

  ?>
 <br>
 paged: 
 <?php echo $paged; ?>
 <br>
 max_num_pages: 
 <?php echo $max_num_pages; ?>
 <br>
 pags list: 
 <?php echo $pags_list; ?>
 
 <p>-----------</p>

<?php 

echo "<br> post_per_page: ";
$post_per_page  = get_option('posts_per_page'); //opción global de posts paginados en nuestra app
echo $post_per_page;

echo "<br> offset: ";
$offset       = ($paged - 1) * $post_per_page; //desde donde cogemos resultados
echo $offset;

echo "<p>Limit es: </p>";
echo  $limit = get_option('posts_per_page');
echo "<p>-----------*****-----------</p>";

?>



 <?php while($pastorales->have_posts() ): $pastorales->the_post(); ?>
 <!-- article -->
 <article id="post-<?php the_ID(); ?>" <?php post_class('grid1-3'); ?>>
  <div class="imagen-destacada">
    <?php echo "<p><b>Fecha: </b>" . get_post_meta( get_the_ID(), 'info_page_fecha', true ) . "</p>"; ?>
    <a class="mas-info"  href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
    </div> <!--.imagen-destacada-->
  <div class="clear"></div>
 </article>
 <!-- /article -->
 
 <?php
 
 endwhile;
 ?>

<?php 
/*

$max_page = $wp_query->max_num_pages;
        if (!$paged && $max_page >= 1) {
            $current_page = 1;
        }
        else {
            $current_page = $paged;
        } ?>
     <div class="page-nav fix">
     <span class="page-index"><?php printf(__('P&aacute;gina %1$s de %2$s'), $current_page, $max_page); ?></span>
     <div class="suf-page-nav fix">
 <?php echo paginate_links(array(
 "base" => add_query_arg("paged", "%#%"),
 "format" => '',
 "type" => "plain",
 "total" => $max_page,
 "current" => $current_page,
 "show_all" => false,
 "end_size" => 2,
 "mid_size" => 2,
 "prev_next" => true,
 "next_text" => __('&rArr;'),
 "prev_text" => __('&lArr;'),
 )); ?>
        </div>
        </div> */

?>
<?php


    $big = 999999999;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format' => '?paged=%#%', //combinado con base, reemplaza %#% por el número de la página en la url
        'current' => max( 1, get_query_var('paged') ), //get paged
        'total' => $wp_query->max_num_pages, //número de páginas
        'type' => 'list' // lista desordenada ul li
    ) );



/*
if (function_exists('custom_pagination')) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
 
 */
 
  wp_reset_postdata();
 /*
  <ul class="paginacion clear">
            <li>
              <?php       
                  if (function_exists(custom_pagination)) {
                    custom_pagination($pastorales->max_num_pages,"",$paged);
                  } 
              ?>
            </li>
        </ul>
*/ ?>

            </div>
      </div>
<!-- **************************************** -->
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section>

<?php
  get_footer();
?>