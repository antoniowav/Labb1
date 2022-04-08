<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
                                <?php the_post_thumbnail(); ?> 
								<h1 class="title"><?php the_title(); ?></h1>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a><?php the_author_posts_link(); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a> <?php the_category(" , ", true, ""); ?> </a>
									</li>
								</ul>
                                <p> <?php the_content(); ?> </p>
							</article>
						</div>
						<?php get_sidebar("sidebar"); ?>
					</div>
				</div>
			</section>
		</main>





<?php
get_footer();
?>