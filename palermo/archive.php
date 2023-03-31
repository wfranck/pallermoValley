<?php get_header(); ?>
		

		<div id="content" class="posts">
	
		<?php if (have_posts()) : ?>

			<?php //$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	
			<?php /* If this is a category archive */ if (is_category()) { ?>				
			<h2 class="archive_head">Entradas etiquetadas como '<?php echo single_cat_title(); ?>'</h2>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="archive_head">Entradas para <?php the_time('F Y'); ?></h2>

			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h4><?php the_time('F jS, Y') ?><!-- por <?php the_author() ?> --> &middot; <?php comments_popup_link('No hay Comentarios', '1 Comentario', '% Comentarios'); ?></h4>
			<div class="entry">
				<?php the_excerpt() ?>
				<p><a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" title="Lee el resto de esta entrada">[Leer Más &rarr;]</a></p>
			</div>
			<p class="tagged"><strong>Etiquetas:</strong> <?php the_category(' &middot; ') ?></p>
			<div class="clear"></div>
			
			<?php endwhile; ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>

		<?php else : ?>
		
			<h2 class="page_header">Rayos, no hemos podido encontrar eso...¿tratas de nuevo?</h2>
			<div class="entry">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
			
		</div>
			

<?php get_footer(); ?>