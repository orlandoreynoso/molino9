<section class="section-bienvenida">
  <div class="container">
    <div class="row">
      <div class="col-md-12 gridx">
        <div class="i-bienvenida">
          <h3><?php bloginfo('title'); ?></h3>
        </div>
        <?php // get_template_part( 'template/cover','bienvenidos' ); ?>
        <?php
        while ( have_posts() ) : the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>
</div>
</section>
