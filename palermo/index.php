<?php get_header(); ?>


		<div id="content" class="posts">

		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
					
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h4><?php the_time('F jS, Y') ?> por <?php the_author() ?> &middot; <?php comments_popup_link('No hay Comentarios', '1 Comentario', '% Comentarios'); ?></h4>
			<div class="entry">
				<?php the_content('[Leer Más &rarr;]'); ?>
			</div>	
			<p class="tagged"><span class="add_comment"><?php comments_popup_link('&rarr; No hay Comentarios', '&rarr; 1 Comentario', '&rarr; % Comentarios'); ?></span><strong>Etiquetas:</strong> <?php the_category(' &middot; ') ?></p>
			<div class="clear"></div>
			
			<?php endwhile; ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>
			
		<?php else : ?>
	
			<h2 class="page_header center">No Encontrado</h2>
			<div class="entry">
				<p class="center">Disculpa, pero estás buscando algo que no esta aquí.</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>
	
		<?php endif; ?>
		
		</div>

<?php get_footer(); ?>