<?php get_header(); ?>

		
		<div id="content" class="posts">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php include (TEMPLATEPATH . '/navigation.php'); ?>
						
			<h2><?php the_title(); ?></h2>
			<h4><?php the_time('F jS, Y') ?> por <?php the_author() ?> &middot; <a href="<?php the_permalink() ?>#comments"><?php comments_number('No hay Comentarios', '1 Comentario', '% Comentarios'); ?></a></h4>
			<div class="entry">
				<?php the_content('<p>Lee el resto de esta entrada &raquo;</p>'); ?>
				<?php link_pages('<p><strong>Páginas:</strong> ', '</p>', 'number'); ?>
			</div>
			<p class="tagged"><strong>Etiquetas:</strong> <?php the_category(' &middot; ') ?></p>
			<div class="clear"></div>
			
			<?php comments_template(); ?>
			
		<?php endwhile; else: ?>
		
			<h2 class="page_header">Uh oh.</h2>
			<div class="entry">
				<p>Disculpa, ninguna entrada corresponde con tu criterio. ¿Quieres buscar de nuevo?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		
		</div>
		

<?php get_footer(); ?>