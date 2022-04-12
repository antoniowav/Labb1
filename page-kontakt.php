<!-- Shows header -->
<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<!-- Shows the page title -->
							<h1><?php the_title(); ?></h1>
							<form>
								<!-- Shows the page content -->
								<?php the_content(); ?>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
<!-- Shows the footer -->
        <?php
get_footer();
?>