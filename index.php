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
	
	<section class="main-s">
        <div class="emagrid md-grid-12">
            <div id="blog" class="md-cols-8">
                <h2>Recent Post</h2>
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    // contenido de la entrada E (template tags, html, etc)
                    ?>
                    <article class="articleCard" itemscope itemtype="http://schema.org/BlogPosting">
                        <a href="<?php the_permalink(); ?>" rel="nofollow">
                            <div class="imgerContainer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/blog-300x200.jpg')"></div>
                            <span class="sr-only"><?php the_title();?></span>
                        </a>
                        <div class="bodyContainer">
                            <a itemprop="name" href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>                        
                            <p><?php the_excerpt(); ?></p>
                            <a rel="nofollow" class="btn button reverse" href="<?php the_permalink(); ?>">View Post</a>

                            <meta itemprop="thumbnailUrl" src="../images/blog-300x200.jpg">
                            <meta itemprop="image" src="../images/blog-300x200.jpg">
                            <span itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
                                <meta itemprop="name" content="7 Year Olds">
                            </span>
                            <meta itemprop="logo" src="../images/7-year-old-kids-logo-300x152.png">
                            <meta itemprop="headline" content="What’s the Best Computer for a 7-Year-Old?">
                            <meta itemprop="author" content="Himni">
                            <meta itemprop="datePublished" content="2019-09-02">
                            <meta itemprop="dateModified" content="2019-09-19">
                        </div>
                    </article>

                    <?php
                    //the_content();
                
                    // cogemos las etiquetas de la entrada E actual
                    
                    endwhile;
                endif; 
                ?>
            </div>
		</div>
	</section>


<?php get_footer();
