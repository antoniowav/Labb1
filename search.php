<!-- Shows the header -->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<!-- Shows the query that the user searched for -->
							<h1>Sökresultat för: <?php the_search_query(); ?> </h1>
							
							
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<div class="searchform-wrap">
										<!-- Shows the search component from search-form.php -->
										<?php get_search_form(); ?>
									</div>
								</form>
							</div>
							<!-- Loop to display posts within the search query -->
							<?php 
										while ( have_posts() ) : the_post(); 
										
										
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
								
								<p> 
										<!-- The excerpt is used when we don't want to show the full text -content- but only a small part as preview -->
									<?php the_excerpt( /* $more_link_text , $strip_teaser */ ); ?> 
								</p>
								
							</article>
								<!-- End loop -->
							<?php 
								endwhile;
							?>

							
							<nav class="navigation pagination">
								<!-- Shows pagination if there are more than 3 posts -->
								<?php echo paginate_links(); ?>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>

<!-- Shows the footer -->

        <?php
get_footer();
?>