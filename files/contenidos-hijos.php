<?php

$variable = get_the_ID();

function get_pastorales($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
?>
<div class="m-comunidades row">
    <?php $the_query = new WP_Query(get_pastorales($variable,-1));   ?>
    <?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));    ?>
    <?php while ($the_query -> have_posts()){

       $the_query -> the_post();


       ?>
    <div class="list col-md-4">
    <div class="todo">
      <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
        <div class="thumb img-responsive" >
          <?php
          if(has_post_thumbnail()){
           the_post_thumbnail('medium');
          }
          else{ ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dar-la-vida-por-los-demas.jpg" alt="">
          <?php  }         ?>
        </div>
        <h5><?php the_title(); ?></h5>
      </a>
    </div>
    </div>

  <?php }
   wp_reset_postdata();
   ?>
</div>
