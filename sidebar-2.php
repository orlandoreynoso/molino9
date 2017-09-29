

<?php  


?>


<?php if ( is_404()); { ?>

<?php // dynamic_sidebar('sidebar'); ?>

<?php /* 
<ul id="archive-list">
 <?php
 $myposts = get_posts('numberposts=-1&');
 foreach($myposts as $post) : ?>
 <li><?php the_time('m/d/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>
 </ul>


*/
 ?>
<?php
     $args=array(
   'post_type' => 'post',
   'post_status' => 'publish',
   'orderby' => 'ASC',
   'posts_per_page' => '10',
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
?>



<?php  } // endif; ?>

