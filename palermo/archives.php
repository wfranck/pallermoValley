<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		


		<div id="content" class="pages">
		
			<h2>Ver los Archivos...</h2>
			<div class="entry">
				<h3 class="top">por mes:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				<h3>por Categoría:</h3>
				<ul>
					<?php wp_list_categories('title_li=0'); ?>
				</ul>
			</div>
			<div class="clear rule"></div>
			
		</div>	
				

		
<?php get_footer(); ?>