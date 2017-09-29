<?php  
//dynamic_sidebar('sidebar');

/*
$datos = array(
'cat' => '-3,-4,-5,-6',
'orderby' => 'ASC',
'post_per_page'=> '10',
);

$tquery = new WP_Query($datos);


if ( $tquery->have_posts() ) :  ?>

<?php while ( $tquery->have_posts()) : $tquery->the_post(); ?>
<div class="list">
	<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>	
	<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>	
<?php endwhile;?>

<?php endif; ?> 

*/
ultimas_paginas();

?>
