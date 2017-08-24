
			<?php get_header(); ?>
			<section>
				<div class = "container">
					 <?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?> 
					<div class = "info">
						<article>
							<h4 class = "left"><a style = "color:red;text-decoration: none" href = "<?PHP the_permalink();?>"><?PHP the_title();?></a></h4>
							<h4 class = "right"></h4>
							<!--<img src = "img/1.jpg"/>-->
							<div class = "">
							<br>
							<p><?PHP the_content();?></p>
							</div>
						</article>
					</div>
					<?PHP endwhile; ?>
			          <?php the_posts_pagination(); ?>
			         <?php endif; ?> 
					</div>
			</section>
			<?php get_footer(); ?>