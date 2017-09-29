<?php
   $category_posts = new WP_Query(
				array(
				        'post_type' => 'page',
				        'post_parent'       => 60,
				        'posts_per_page'         => -1,
				        'paded' => 6
    ));
         while($category_posts->have_posts()) : $category_posts->the_post();  ?>
		<div class="list">
		    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
<?php
      endwhile;

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$query = new WP_Query( array( 'paged' => $paged ) );
?>
