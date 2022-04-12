<!-- Shows the header -->
<?php
get_header();
?>

<main>
<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- Shows the page name -->
							<h1>Post from: <?php echo wp_title(""); ?></h1>

							<!-- Loop to show the posts on the page -->
									<?php 
										if ( have_posts() ) : while ( have_posts() ) : the_post(); 
										
										
									?>
							<article>
								<!-- Show thumbnail picture -->
								<?php the_post_thumbnail(); ?> 
								<h2 class="title">
									<!-- The permalink makes the title clickable and send the user to singe.php -post page-
										The title shows the title of the post -from the loop posts- 
										The time shows the date of publication 
										The author shows who wrote the article
										The category shows in which categories the post belongs	-->
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
								<!-- The excerpt is used when we don't want to show the full text -content- but only a small part as preview -->
								<p> 
									<?php the_excerpt( /* $more_link_text , $strip_teaser */ ); ?> 
								</p>
								
							</article>
							<!-- End of loop -->
							<?php 
								endwhile;
								endif;
							?>


							<nav class="navigation pagination">
								<!-- Show the page numbers -navigation- in case there are more than 3 posts -->
								<?php echo paginate_links(); ?>
							</nav>
						</div>
						<!-- Shows the sidebar -->
						<?php get_sidebar("sidebar"); ?>
							
					</div>
				</div>
			</section>
		</main>
<!-- shows footer -->
        <?php
get_footer();
?>
