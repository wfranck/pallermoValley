<?php get_header(); ?>


		<div id="content" class="posts">

		<?php if (have_posts()) : ?>
	
			<h2 class="archive_head">Resultados de la Búsqueda de <span class="green"><?php echo $s; ?></span></h2>
	
			<?php while (have_posts()) : the_post(); ?>		
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace Permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h4><?php the_time('F jS, Y') ?><!-- por <?php the_author() ?> --> &middot; <?php comments_popup_link('No hay Comentarios', '1 Comentarios', '% Comentarios'); ?></h4>
			<div class="entry">
				<?php the_excerpt() ?>
				<p><a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" title="Lee el resto de esta entrada">[Leer más &rarr;]</a></p>
			</div>
			<p class="tagged"><strong>Etiquetas:</strong> <?php the_category(' &middot; ') ?></p>
			<div class="clear"></div>
		
			<?php endwhile; ?>
			
			<?php include (TEMPLATEPATH . '/navigation.php'); ?>
		
		<?php else : ?>
	
			<h2 class="page_header">Nada de <span class="green"><?php echo $s; ?></span> por ac&aacute;! Quer&eacute;s tratar de nuevo?</h2>
			<div class="entry">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
			
		</div>
		


<?php get_footer(); ?>