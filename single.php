<!-- Shows the header -->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
								<!-- Shows the post thumbnail image -->
                                <?php the_post_thumbnail(); ?> 
								<!-- Shows the post title -->
								<h1 class="title"><?php the_title(); ?></h1>
								<ul class="meta">
									<li><!-- The time shows the date of publication 
										The author shows who wrote the article
										The category shows in which categories the post belongs -->
										<i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a><?php the_author_posts_link(); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a> <?php the_category(" , ", true, ""); ?> </a>
									</li>
								</ul>
								<!-- Showa the post content -->
                                <p> <?php 
										the_content();
									?> 
								</p>
							</article>
						</div>
						<!-- Shows the sidebar -->
						<?php get_sidebar("sidebar"); ?>
					</div>
				</div>
			</section>
		</main>



<!-- Shows the footer -->

<?php
get_footer();
?>