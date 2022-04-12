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
						<aside id="secondary" class="col-xs-12 col-md-3">
						<!-- Shows the side menu -->
						<?php
					wp_nav_menu(array(
						'theme_location' => "side menu",
						"menu_class" => "side menu",
					)); 
				?>
							
						</aside>
					</div>
				</div>
			</section>
		</main>
<!-- Shows the footer -->
        <?php
get_footer();
?>