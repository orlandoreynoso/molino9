<?php
/*
  Template Name: Comunidades Molino
  Template Post Type: post, page, product
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-12 con">
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
          <hr>
          <div class="interiores">
            <?php //  echo  'estoy en page';      ?>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          </div>

              <?php

                $variable = get_the_ID();

              //  echo 'Este es el valor de la variable '.$variable;


              //  echo $variable;

              ?>
          <div class="agrupaciones-desglose">
                <div class="c-agrupaciones">
                    <?php $the_query = new WP_Query(get_agrupaciones($variable,-1));   ?>
                    <?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));    ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="list">
                    <div class="infocomunidades">
                      <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
                        <div class="thumb" ><?php the_post_thumbnail('medium'); ?></div>
                        <h5><?php the_title(); ?></h5>
                      </a>
                      <div class="exe"><?php excerpt('15'); ?> </div>
                    </div>
                    </div>
                    <?php endwhile;?>
                </div>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
