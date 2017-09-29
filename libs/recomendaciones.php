<div class="titulo-recomendaciones">
	<h3>Recomendaciones</h3>
</div>
<div class="c-recomendaciones">
<?php /*
	<?php get_laterales(1385,1,'Año de la misericordia','reflexiones'); ?>
	<?php get_laterales(1294,1,'Reflexiones Sacerdotales','reflexiones'); ?>
	<?php get_laterales(1254,1,'Conozca Guatemala','reflexiones'); ?>
	<?php get_laterales(692,1,'Presentaciones','reflexiones'); ?>
	<?php get_laterales(737,1,'El atrio','reflexiones'); ?>
*/
//get_recomendaciones_name('atrio');
/*
get_laterales(10,1,'Eventos','nada');
get_laterales(12,1,'Galería','nada');
*/

?>



<div class="c-agrupaciones">
<?php $the_query = new WP_Query(get_agrupaciones(15,1));  	?>
<?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));  	?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="list">
        <div class="todo">
			<a class="ir-agrupacion" href="<?php the_permalink(); ?>">
				<div class="thumb"><?php the_post_thumbnail('full'); ?></div>
				<h5><?php the_title(); ?></h5>
			</a>
            <!-- div class="exe"><?php // excerpt('10'); ?> </div -->
		</div>
        </div>
<?php endwhile; wp_reset_postdata(); ?>
</div>

</div>
