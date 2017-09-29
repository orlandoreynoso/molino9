<div class="titulo-recomendaciones">
	<h3>Recomendaciones</h3>
</div>
<div class="c-recomendaciones">
<?php
$id = get_the_ID();
$nombre = get_the_title();

?>

<?php $the_query = new WP_Query(create_page_two(10,1));   ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="list">
				<!-- div id="titulo_<?php  //echo $id; ?>">
		        <div id="name_cat">
		            <h3><?php // echo $nombre; ?> &raquo; </h3>
		            <h3><?php // the_category(); ?></h3>
		        </div>
		        <div id="date_cat">
		            <span class="date">Publicación: <?php // the_time('j F, Y'); ?></span>
		        </div>
		    </div -->
		    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		    <h5><a href="<?php the_permalink(); ?>" class="cat"><?php echo the_title();  ?></a></h5>
		    <?php // the_excerpt(); ?>
		</div>
<?php endwhile; wp_reset_postdata(); ?>

</div>
