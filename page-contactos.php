<?php 
/*
 * Template name: Pagina Contactos
 * */
get_header(); ?>

<div class="backgroundPicture" <?php if(has_post_thumbnail()):?>
	style="background:url(<?php the_post_thumbnail_url('full')?>)">
	<?php else:?>
	style="background:url(<?= get_template_directory_uri();?>/img/bg-image-inner.jpg)">
	<?php endif ?>
	<article class="container contenidoInterno">
		<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-xs-12 col-md-5 noMP">
					<div class="TituloInterno">
						<?php the_title()?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="BotonesContactos BotonesContactos col-xs-12">
					<div class="BotonContacto BotonesContactos__Email">
						<div class="Boton_Icono BotonesContactos__Email__Icono"><img src="<?php echo get_template_directory_uri();?>/img/email.png" class="img-fluid" alt="email"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Email__Correo"><a href="<?php the_field('email','option')?>"><?php the_field('email','option')?></a></div>
					</div>
					<div class="BotonContacto BotonesContactos__Telefono">
						<div class="Boton_Icono BotonesContactos__Telefono__Icono"><img src="<?php echo get_template_directory_uri();?>/img/telefono.png" class="img-fluid" alt="Telefono"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Telefono__Correo"><a href="tel<?php the_field('telefono_sin_formato','option')?>"><?php the_field('telefono_con_formato','option')?></a></div>
					</div>
					<div data-toggle="modal" data-target="#mapa" class="BotonContacto BotonesContactos__Direccion">

						<div  class="Boton_Icono BotonesContactos__Direccion__Icono"><img src="<?php echo get_template_directory_uri();?>/img/direccion.png" class="img-fluid" alt="Direccion"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Direccion__Correo"><?php the_field('direccion','option')?></div>
					</div>
					<div class="modal fade bd-example-modal-lg" id="mapa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div id="map" style="margin:auto;min-height: 80vh;width:100%;height:100%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-xs-12 col-md-8 contenidoInterno__Formulario noMP">
				<div class="TituloInterno">
					<?php _e('¿Que tipo de producto necesita?')?>
				</div>
			</div>
			<div class="col-xs-12 contenidoInterno__Formulario">

				<div class="contenidoInterno__Formulario__selectorTipoProducto">
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="Producto" id="inlineRadio1" value="V"> 	
						<span>Ventanas PVC</span>
					</label>
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="Producto" id="inlineRadio2" value="JV"><span>Muros Verticales</span>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8 contenidoInterno__Formulario noMP">
				<div class="TipoCliente TituloInterno hidden">
					<?php _e('¿Que tipo de cliente eres?')?>
				</div>
			</div>
			<div class="col-xs-12 contenidoInterno__Formulario TipoCliente hidden">
				<div class="contenidoInterno__Formulario__selectorTipoCliente">
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="TipoDeCliente" id="inlineRadio3" value="DC"> 	
						<span>Dueño de casa</span>
					</label>
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="TipoDeCliente" id="inlineRadio4" value="E"><span>Especialista</span>
					</label>
				</div>
			</div>
			<div class="Formularios col-xs-12">
				<div class="Formulario FormularioDCV hidden noShow">
					<?php the_field('ventanas_dueno_de_casa')?>
				</div>
				<div class="Formulario FormularioEV hidden noShow ">
					<?php the_field('ventanas_especialista')?>
				</div>
				<div class="Formulario FormularioEJV hidden noShow">
					<?php the_field('jardines_especialista')?>
				</div>
				<div class="Formulario FormularioDCJV hidden noShow">
					<?php the_field('jardines_dueno_de_casa')?>
				</div>
			</div>
		</div>
	</div>
</div>
</article>
<?php endwhile; ?>
<script type="text/javascript">

	var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: parseFloat(Zonapro.latitud), lng: parseFloat(Zonapro.longitud)},
		zoom: parseInt(Zonapro.zoom)
	});
	var marker = new google.maps.Marker({
	    position: new google.maps.LatLng( parseFloat(Zonapro.latitud),  parseFloat(Zonapro.longitud))
  });
	marker.setMap(map);
}

</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ7k9abwQ3PZiL5X_oM3qPEKa5uPgQpWg&callback=initMap">
</script>
<?php else: ?>
<article class="container contenidoInterno">
	<div class="row">
		<div class="TituloInterno col-xs-12 col-md-5">
			<?php __('La Pagina Que Buscas No Existe','ghp')?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6 contenidoInterno__Contenido">
			<?php __('Por favor ve al inicio haciendo click en nuestro logo','ghp')?>
		</div>
		<div class="col-xs-12 col-md-6 contenidoInterno__Foto">
			<div class="contenidoInterno__ImagenyColores">
				<div class="contenidoInterno__Imagen">
					<img src="<?php get_template_directory_uri() ?>/img-bg-image-inner.jpg" class="img-fluid" alt="Imagen Interna">
				</div>
			</div>
		</div>
	</div>
</article>
</div>


<?php endif; ?>
<?php get_footer(); ?>
