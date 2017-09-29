<div id="crecimiento">
	<div id="titulo_crecimiento">
		<h3>Bienvenidos</h3>
	</div>

			<div class="contenido">
			              <?php
			  // Start the loop.
			  while ( have_posts() ) : the_post();

			    // Include the page content template.
			    get_template_part( 'content', 'page' );

			      // End the loop.
			  endwhile;
			  ?>
			 <?php  the_content(); ?> 	
			</div>



</div>
<div id="entradas">
	<div id="titulo_entradas">
		<h3>últimas noticias</h3>
	</div>				
	<div id="recientes">
		   <?php get_sidebar('3'); ?>
	</div>	

</div>	