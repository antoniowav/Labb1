<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link href="<?php echo get_template_directory_uri()."/css/font-awesome.css";?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri()."/css/bootstrap.css";?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri()."/css/style.css";?>" rel="stylesheet" type="text/css" />

</head>

<body>
<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<?php get_search_form(); ?>
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									
										<h2>Sidor</h2>
										
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location' => "navbar menu",
                                                "menu_class" => "navbar menu",
                                            )); 
                                        ?>
										
									
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a> <?php the_archive_title(); ?> </a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
                                        <?php   wp_nav_menu(array(
                                                'theme_location' => "categories",
                                                "menu_class" => "categories",
                                            )); 
                                        ?>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
</body>