<?php get_header(); ?>

    <!--
    	Row 1 del loop: Contiene imagen destacada jumbo y título en H1.
     -->
  <div class="container-fluid">
  	<div class="row personas">
    	<div class="col-md-6 col-md-offset-1  cuadrodetextos">
        <!-- <h2 class="text-right motivador">Te invitamos a construir un país donde el poder ciudadano sea protagonista.</h2>
        <h1 class="text-right unete"><strong>Únete hoy.</strong></h1> -->
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="//www.youtube.com/embed/wIfjND4Oerw" class="embed-responsive-item" allowfullscreen></iframe>
        </div>
        </div>
        <div class="col-md-4 cuadrodeinfo">
        <h3 style="color:#CCC; text-align:center; font-variant:small-caps;">Te invitamos a construir un país donde el poder ciudadano sea protagonista</h3>
        <hr />
        <h2>¿Quieres recibir información?</h2>
        <button class="btn btn-block btn-lg btn-default" data-toggle="modal" data-target="#modalInfo">¡Sí, quiero!</button>
        <!-- Modal -->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">¡Inscríbete en nuestra lista de correo!</h4>
      </div>
      <div class="modal-body">
        <p>Al inscribirte en nuestra lista de correo, podrás mantenerte al día respecto a las actividades que hemos realizado y las que están por ocurrir, junto con estar informado respecto a temas de la actualidad que pueden ser útiles para ti.</p>
        <p><strong>Tu dirección de correo queda almacenada en servidores seguros, y no será regalada ni vendida en ningún momento.</strong></p>
        <h3>Formulario de Wufoo</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>

        <h2>¿Quieres participar en RD?</h2>
        <button class="btn btn-block btn-lg btn-default" data-toggle="modal" data-target="#modalAdherente">¡Sí, quiero!</button>
        <!-- Modal -->
		<div class="modal fade" id="modalAdherente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">¡Bienvenido a Revolución Democrática!</h4>
		      </div>
		      <div class="modal-body">
		        <p>Primero que todo, ¡gracias por la motivación! Nos alegra mucho que te animes a participar de este movimiento.</p>
                <p>Al adherir a nuestro movimiento, indicas que estás de acuerdo con nuestra Carta Fundacional y nuestros Estatutos. Podrás recibir mayor información y tendrás la oportunidad de participar en nuestros Territorios, Comisiones de Contenidos o Frentes de Acción, en donde tu trabajo te otorgará la calidad de miembro activo.</p>
                <p>Para que nuestros encargados de inserción te contacten, debes llenar el siguiente formulario:</p>
                <h3>Formulario de Wufoo</h3>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
		      </div>
		    </div>
		  </div>
		</div>
        </div>        
    </div>
  </div>
  <div class="container">
  	<div class="row">
    	<div class="col-md-3 col-xs-6" align="center">
        <img src="<?php bloginfo('template_directory'); ?>/img/caluga-01.png" class="img-responsive" />
        </div>
    	<div class="col-md-3 col-xs-6" align="center">
        <img src="<?php bloginfo('template_directory'); ?>/img/caluga-02.png" class="img-responsive" />
        </div>
    	<div class="col-md-3 col-xs-6" align="center">
        <img src="<?php bloginfo('template_directory'); ?>/img/caluga-03.png" class="img-responsive" />
        </div>
    	<div class="col-md-3 col-xs-6" align="center">
        <img src="<?php bloginfo('template_directory'); ?>/img/caluga-04.png" class="img-responsive" />
        </div>
	</div>
    <div class="row">
    	<div class="col-md-12">
        <h2>Últimas noticias</h2>
        </div>
    </div>
    
    <div class="row">

		<?php $my_query = new WP_Query( 'posts_per_page=3' );
			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            
			<div class="col-md-4">
            <?php echo get_the_post_thumbnail( $page->ID, '4-columnas', array ( 'class' => 'img-responsive' ) ); ?>
        	<h3 class="tituloenportada"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
    		</div>
        
			<?php endwhile; ?>
  	</div><!-- /.row -->
  </div><!-- /.container -->
    
<?php get_footer(); ?>