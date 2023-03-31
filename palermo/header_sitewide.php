<div id="bghelper" class="clearfix">

<div id="container" class="clearfix">

<div id="lefthalf">

<div id="header" class="clearfix">

<div id="titlearea">

<h1>Palermo Valley es la<br/>Comunidad Web 2.0<br/>de Argentina <a href="http://www.palermovalley.com/blog/about/">M&aacute;s info &raquo;</a></h1>

<h2 class="english">Palermo Valley is the<br/>Argentine Web 2.0<br/>Community</h2>

<a href="http://www.palermovalley.com/blog/" id="backtohome" title="Volver al Inicio">Volver al Inicio</a>

</div>

	<ul id="nav">

		<li><a <?php if (is_home()) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>">Inicio</a></li>

        <?php wp_list_pages('depth=1&title_li=');?>

    <!--<li><a href="http://palermovalley.com/foro/">Foro</a></li>-->

	</ul>

</div>

<div style='clear:both'>

</div>


<div id="l_sidebar">

<a href='http://eventos.palermovalley.com/pvn10/'><img src='http://www.palermovalley.com/blog/images/pvn10_sidebar.png' alt='Palermo Valley Night 10' style='margin-bottom:10px;' /></a>

	<ul class="sidebar_list">

		<li class="widget">
			<h2>Posts Recientes</h2>
			<ul>
<?php wp_get_archives('type=postbypost&limit=10'); ?>
			</ul>
		</li>
		<?php if (function_exists('get_flickrrss')) { ?>
		<li class="widget">
			<h2><a href="http://www.flickr.com/search/?q=%22palermo+valley%22&m=tags&s=rec&z=t">Palermo Valley en <span class="flickr_blue" rel="external">Flick</span><span class="flickr_pink">r</span></a></h2>
			<ul class="flickr_stream">
				<?php get_flickrrss(); ?>
			</ul>
			<a href="http://www.flickr.com/search/?q=%22palermo+valley%22&m=tags&s=rec&z=t" rel="external">Ver m&aacute;s fotos &raquo;</a>
		</li>
		<?php } ?>
		<li class="widget">
      <h2>Emprendimientos Relacionados</h2>
      <ul class="logolist">
        <li><a href="http://www.startmeupargentina.com" rel="external"><img src="<?php bloginfo('template_url'); ?>/images/events_smua.png" alt="Start Me Up Argentina"/></a></li>
        <li><a href="http://www.barcamp.com.ar" rel="external"><img src="<?php bloginfo('template_url'); ?>/images/events_barcamp.png" alt="BarCamp Buenos Aires"/></a></li>
        <li><a href="http://www.seosemargentina.com.ar/" rel="external"><img src="<?php bloginfo('template_url'); ?>/images/events_semargentina.png" alt="Search Marketing Argentina"/></a></li>
        <li><a href="http://www.goliveinternet.com" rel="external"><img src="<?php bloginfo('template_url'); ?>/images/events_goliveinternet.png" alt="GoLiveInternet"/></a></li>
      </ul>
		</li>
		<li class="widget">
			<h2>Categor&iacute;as</h2>
			<ul>
				<?php wp_list_cats('sort_column=name'); ?>
			</ul>
		</li>
		<li class="widget">
			<h2>Archivos</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
	</ul>
</div>



<div id="sidebar">

	<ul class="sidebar_list">

    <li class="widget widget_search">

    		<h2>Buscar en el blog</h2>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </li>
        
    <li class="widget widget_search networking">
        <h2 class='gente'>Buscar integrantes</h2>
			<form id="buscargente" method="get" action="http://integrantes.palermovalley.com/buscar/">
			<input type="text" name="q" id="q2" size="19" /> <input type="submit" value="Buscar" />
            <input type="hidden" id="searchsubmit" value="Search" />
			</form>

		</li>

    <li class="widget">

    			<h2>Empresas</h2>

			<ul><li><a href="http://www.palermovalley.com/blog/empresas/">Startups y demás empresas a lo largo y ancho de la Argentina que son parte de Palermo Valley</a></li></ul>

		</li>

		<?php get_links_list('id'); ?>





	</ul>

</div>


</div>



<div id="righthalf">

<div id="quotebar" class="clearfix">

<div id="rsslink">

<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/feedicon24.png" alt="RSS Feed"/></a>

</div>
<!--
	<strong class="quote">&ldquo;Palermo Valley es un estado mental.&rdquo;</strong> <small class="author">- Primer PVN, 23/2/2008.</small>
	-->
	
	<ul id='subdomainnav'>
    <li id='subdomainnav-registro'><a href='http://integrantes.palermovalley.com/registro/'>Registrate/Ingresá</a>
    <li id='subdomainnav-integrantes'><a href='http://integrantes.palermovalley.com/'>Integrantes</a></li>
    <li id='subdomainnav-eventos'><a href='http://eventos.palermovalley.com/'>Eventos</a></li>
</li>
	</ul>

</div>

<div id="maincontent"><?php if (is_home()&&!$section){ ?><h3 class="recentposts">Lo &Uacute;ltimo</h3><?php } ?>