<?php
get_header();
?>

<main>
<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
									<?php 
										if ( have_posts() ) : while ( have_posts() ) : the_post(); 
										
										
									?>
							<article>
								<?php the_post_thumbnail(); ?> 
								<h2 class="title">
									<a href=<?php the_permalink(); ?> > <?php the_title(); ?> </a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a> <?php the_author_posts_link(); ?> </a>
									</li>
									<li>
										<i class="fa fa-tag"></i>  <a> <?php the_category(" , ", true, ""); ?> </a>
									</li>
								</ul>
								
								<p> 
									<?php the_excerpt( /* $more_link_text , $strip_teaser */ ); ?> 
								</p>
								
							</article>
							<?php 
								endwhile;
								endif;
							?>

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<?php get_sidebar("sidebar"); ?>
					</div>
				</div>
			</section>
		</main>

        <?php
get_footer();
?>
