<?php get_header(); ?>

    <!--
    	Row 1 del loop: Contiene imagen destacada jumbo y título en H1.
     -->

  <div class="container">

    		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

    <div class="row">
    
        <div class="col-md-12">
            <!-- <div align="center"><?php /* echo get_the_post_thumbnail($page->ID, '12-columnas'); */ ?></div> -->
            <!-- Título. Esto ya está OK. -->
            <h1 class="text-center"><?php the_title(); ?></h1>
            <hr />
    	</div>
	</div>
	<div class="row">
    	<div class="col-md-10 col-md-offset-1">
		  <?php the_content(); ?>
    	</div>
	</div>
  </div>

                <?php

				endwhile;

			else :

				// If no content, include the "No posts found" template.
				?> <div class="row"><div class="col-md-12"><h1>Hola, no encontramos nada. </h1></div></div></div> <?php 

			endif;
		?>



<?php get_footer(); ?>