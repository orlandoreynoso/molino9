

<?php  


?>


<?php // if ( is_404()); { ?>

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

// ultimas_entradas();
ultimas_paginas();

?>



<?php  // } // endif; ?>

