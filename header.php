<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Wp title shows the name on the tab - I added an if statement thats shows the home page name if the user is located in home, otherwise it takes the name form the page name-->
	<title><?php
    if (is_front_page()) {echo ' Labb 1 ';}
    else {echo wp_title('');}
    ?>
    </title>
	<link href="<?php echo get_template_directory_uri()."/css/font-awesome.css";?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri()."/css/bootstrap.css";?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri()."/css/style.css";?>" rel="stylesheet" type="text/css" />
	<!-- Hook -->
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrap">
	<!-- Header -->
	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- Shows the blog name - the href has the home url, taken by the esc_url -->
					<a class="logo" href="<?php echo esc_url( home_url( '' ) ); ?>"> <?php bloginfo( "name" ); ?> </a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- Shows the search bar -->
						<?php get_search_form(); ?>

					</div>
					<!-- Hamburger menu triggered via css -->
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<!-- Mobile version of search bar -->
			<?php get_search_form(); ?>

		</div>

		<nav id="nav">
			<div class="container">
				<!-- Navigation menu -->
				<?php
					wp_nav_menu(array(
						'theme_location' => "navbar menu",
						"menu_class" => "navbar menu",
					));  
				?>
			</div>
		</nav>

