<div class="titulo--groupings">
	<h3>Agrupaciones</h3>
</div>
<div class="c-agrupaciones">
<?php $the_query = new WP_Query(get_agrupaciones(14,-1));  	?>
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
<?php endwhile;?>
</div>
