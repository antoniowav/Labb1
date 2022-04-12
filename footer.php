<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- widget 1: om oss -->
						<?php dynamic_sidebar("footer1"); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<!-- widget 2: Kontaktuppgifter -->
					<?php dynamic_sidebar("footer2"); ?>

					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<!-- widget 3: Social Media icons -->
						<?php dynamic_sidebar("footer3"); ?>

					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<!-- widget 4: Copyright -->
						<?php dynamic_sidebar("footer4"); ?>

					</div>
				</div>
			</div>
		</footer>
		<!-- Hook -->
		<?php wp_footer(); ?>
</body>
</html>