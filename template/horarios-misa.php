<div class="interiores">
  <?php //  echo  'estoy en page';      ?>
  <?php
  while ( have_posts() ) : the_post();
  the_content();
endwhile;
?>
</div>
