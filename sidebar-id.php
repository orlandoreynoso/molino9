<?php

//global $post;

/*
echo "<pre>";
var_dump($post);
echo "</pre>";

*/

//echo $post->ID;


$variable2 = get_the_ID();

//echo $variable2;


$pname  = 'pequenas-comunidades-cristianas';

    $args_10 = array(
        'post_type' => 'page',
        'post_parent' => 348,
        //'post_name__in' => $pname,
        //'post_parent' => 348,
/*        'post_status' => 'publish',*/
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => -1
    );


$the_query = new WP_Query($args_10);

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

}

 wp_reset_postdata();

?>
