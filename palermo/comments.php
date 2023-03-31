<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Por Favor no cargues esta página directamente. Gracias!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
	?>
			
		<p class="center"><?php _e("Esta entrada esta protegida por contraseña. Ingresa la contraseña para ver los comentarios."); ?><p>
				
<?php	return; } }


	/* Function for seperating comments from track- and pingbacks. */
	function k2_comment_type_detection($commenttxt = 'Comment', $trackbacktxt = 'Trackback', $pingbacktxt = 'Pingback') {
		global $comment;
		if (preg_match('|trackback|', $comment->comment_type))
			return $trackbacktxt;
		elseif (preg_match('|pingback|', $comment->comment_type))
			return $pingbacktxt;
		else
			return $commenttxt;
	}

	$templatedir = get_bloginfo('template_directory');
	
	$comment_number = 1;
?>

<!-- You can start editing here. -->

<?php if (($comments) or ('open' == $post-> comment_status)) { ?>

<div id="comments">

	<h3 class="comments_headers"><?php comments_number('0 respuestas', '1 respuesta', '% respuestas' );?> hasta ahora &darr;</h3>
	
	<ul id="comment_list">

	<?php if ($comments) { ?>

		<?php $count_pings = 1; foreach ($comments as $comment) { ?>
	
		<li class="comment <?php if (k2_comment_type_detection() != "Comment") { echo('trackback'); } ?>" id="comment-<?php comment_ID() ?>">
			<p class="comment_meta">
				<span class="comment_num"><a href="#comment-<?php comment_ID() ?>" title="Enlace permanente a este comentario"><?php echo($comment_number); ?></a></span>
				<strong><?php comment_author_link() ?> </strong>
				<span class="comment_time">// <?php comment_date('M j, Y') ?> a las <?php comment_time() ?></span>
			</p>
			<div class="entry">
				<?php comment_text() ?> 
				<?php if ($comment->comment_approved == '0') : ?>
				<p><strong>Tu comentario esta esperando moderación.</strong></p>
				<?php endif; ?>
			</div>
		</li>
		
		<?php $comment_number++; } /* end for each comment */ ?>
	
	</ul>
		
	<?php } else { // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post-> comment_status) { ?> 
			<!-- If comments are open, but there are no comments. -->
				<li class="comment">
					<div class="entry">
						<p>Aquí no hay comentarios todavía...Puedes ser el primero en dejar un comentario.</p>
					</div>
				</li>

		<?php } else { // comments are closed ?>

			<!-- If comments are closed. -->

			<?php if (is_single) { // To hide comments entirely on Pages without comments ?>
				<li class="comment">
					<div class="entry">
						<p>Los comentarios están cerrados.</p>
					</div>
				</li>
			<?php } ?>
	
		<?php } ?>

	</ul>

	<?php } ?>


	<!-- Comment Form -->
	<?php if ('open' == $post-> comment_status) : ?>
	
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
			<p class="unstyled">Debes <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">ingresar</a> para publicar un comentario.</p>
	
		<?php else : ?>

			<h3 id="respond" class="comments_headers">Dej&aacute; un Comentario</h3>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form">
			
			<?php if ( $user_ID ) { ?>
	
				<p class="unstyled">Has ingresado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Salir de esta cuenta') ?>">Salir &raquo;</a></p>
	
			<?php } ?>
			<?php if ( !$user_ID ) { ?>
				<p><input class="text_input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /><label for="author"><strong>Nombre</strong></label></p>
				<p><input class="text_input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /><label for="email"><strong>Email</strong></label></p>
				<p><input class="text_input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /><label for="url"><strong>Website</strong></label></p>
			<?php } ?>
				<!--<p><small><strong>XHTML:</strong> Puedes usar estas etiquetas: <?php echo allowed_tags(); ?></small></p>-->
			
				<p><textarea class="text_input text_area" name="comment" id="comment" rows="7" tabindex="4"></textarea></p>
			
				<?php if (function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); } ?>
			
				<p>
					<input name="submit" class="form_submit" type="submit" id="submit" src="<?php bloginfo('template_url') ?>/images/submit_comment.gif" tabindex="5" value="Envía tu Comentario" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				</p>
		
				<?php do_action('comment_form', $post->ID); ?>
	
			</form>

		<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div> <!-- Close #comments container -->
<div class="clear flat"></div>
<?php } ?>