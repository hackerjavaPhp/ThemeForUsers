
			<?php get_header(); ?>
			<section>
				<div class = "container">
					 <?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?> 
					<div class = "info">
						<article>
							<h4 class = "left"><a style = "color:red;text-decoration: none" href = "<?PHP the_permalink();?>"><?PHP the_title();?></a></h4>
							<h4 class = "right"></h4>
							<br>
							<?php 
						if ( function_exists( 'add_theme_support' ) )
					 	the_post_thumbnail( array(790,1400), array('class' => 'img-polaroid') ); 
					?>
							<div class = "">
							<br>
							<p><?PHP the_excerpt();?></p>
							</div>
						</article>
					</div>
					<?PHP endwhile; ?>
					
			        <?php the_posts_pagination(); ?>
			   
			         <?php endif; ?> 
					</div>
			</section>

			<?php get_footer(); ?>