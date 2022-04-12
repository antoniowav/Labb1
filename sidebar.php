<!-- Sidebar component
get_search_form gets the search bar from search-form.php
dynamic_sidebar shows the sidebar widget -->

<body>
<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar" class="searchform-wrap">
								<ul>
									<li>
										<?php get_search_form(); ?>
									</li>
								</ul>
								<ul role="navigation">
									<li>
										<?php dynamic_sidebar("sidebar"); ?>
									</li>
								</ul>
							</div>
						</aside>
</body>