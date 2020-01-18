<?php get_header(); ?>

	<section class="featured_cat">
        <div class="emagrid md-grid-12">
            <div class="md-cols-3">
                <div class="cat-card article" style="background-image: url('../images/blog-300x200.jpg')">                    
                    <a href="#"><h2>Tours a machupicchu</h2></a>
                </div>
            </div>
            <div class="md-cols-3">
                <div class="cat-card article" style="background-image: url('../images/blog-300x200.jpg')">
                    <a href="#"><h2>Aventura</h2></a>
                </div>
            </div>
            <div class="md-cols-3">
                <div class="cat-card article" style="background-image: url('../images/blog-300x200.jpg')">
                    <a href="#"><h2>Camino Inca</h2></a>
                </div>
            </div>
            <div class="md-cols-3">
                <div class="cat-card article" style="background-image: url('../images/blog-300x200.jpg')">                    
                    <a href="#"><h2>Trekking</h2></a>
                </div>
            </div>
        </div>
	</section>
	
	<section>
		<div class="emagrid">
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
		</div>
	</section>


<?php get_footer();
