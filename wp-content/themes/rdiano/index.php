<?php get_header(); ?>

    <!--
    	Row 1 del loop: Contiene imagen destacada jumbo y título en H1.
     -->

  <div class="container">
      <div class="row">
        <div class="col-md-8">
        
<?php
if ( is_search() ) {
    // add external search form (Google, Yahoo, Bing...)
	?> <h3 class="text-center">Resultados de búsqueda para "<?php the_search_query(); ?>"</h3><hr /> <?php
}
?>
    		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

            <?php echo get_the_post_thumbnail($page->ID, '8-columnas'); ?>
            
            <!-- Título. Esto ya está OK. -->
            <h1 class="text-center"><?php the_title(); ?></h1>
            <h4 class="text-center">Publicado el <?php the_date(); ?> por <?php the_author(); ?></h4>
            <br>
		  <?php the_content(); ?>
          	<br class="visible-xs">
            <img src="<?php bloginfo('template_directory'); ?>/img/separador_300.svg" class="img-responsive visible-xs">

                <?php

				endwhile;

			else :

				// If no content, include the "No posts found" template.
				?> <h1>Hola, no encontramos nada. </h1> <?php 

			endif;
		?>
		</div>
		<div class="col-md-4">
            <?php
			if ( is_active_sidebar( 'sidebar-noticias' ) && is_single() ) : ?>
				<?php dynamic_sidebar( 'sidebar-noticias' ) ?>
            <?php /* elseif ( is_active_sidebar( 'sidebar-2' ) && is_page( array ( 'Grabado', 'Druckgrafik' ) ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-2' ) */ ?>
            <?php else : ?>
				<?php dynamic_sidebar( 'sidebar-noticias' ) ?>
			<?php endif; ?>
        </div>	
	</div>
  </div>


<?php get_footer(); ?>