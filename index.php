<!-- shows the header -->

<?php
get_header();
?>



		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<!-- Shows the thumbnail image -->
								<?php the_post_thumbnail(); ?>
								<div class="text">
									<!-- Shows the title of the page -->
									<h1><?php the_title(); ?></h1>
									<!-- Shows the content of the page -->
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>




<!-- Shows the footer -->

<?php
get_footer();
?>
