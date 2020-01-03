<?php get_header(); ?>

<main id="content" class="site-main">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		// contenido de la entrada E (template tags, html, etc)
		?><h2>
			<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		</h2><?php
		the_content();
	
		// cogemos las etiquetas de la entrada E actual
		
		endwhile;
	endif; 
	?>
	
</main>

<?php get_footer();