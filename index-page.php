<?php 
/*
 * Template name: Pagina Inicio
 * */
get_header(); ?>

<!-- section -->
<div class="contenedorInicio">
	<div class="wrapper-contenido">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php the_content()?>
		<?php endwhile;endif;?>
	</div>
</div>
<?php get_footer(); ?>
