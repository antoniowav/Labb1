<!-- Shows the header -->
<?php
get_header();
?>
        <main>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- Shows the page title -->
							<h1><?php the_title(); ?></h1>
							<!-- Shows the page content -->
							<p><?php the_content(); ?></p>
						</div>
					
					</div>
				</div>
			</section>
		</main>
<!-- Shows the footer -->
        <?php
get_footer();
?>