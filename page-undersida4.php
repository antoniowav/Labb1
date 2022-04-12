<!-- Shows the header -->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<!-- Shows the page title -->
							<h1><?php the_title(); ?></h1>
							<!-- Shows the page content -->
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<!-- Shows the page thumbnail image -->
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- Shows the footer -->
        <?php
get_footer();
?>