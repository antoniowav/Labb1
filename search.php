<?php
get_header();
?>


<main>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
        $the_query->the_post();
                ?>
				<article>
					<ul>
                    	<li>
						<?php the_post_thumbnail(); ?> 
                        	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
									<?php the_excerpt( /* $more_link_text , $strip_teaser */ ); ?> 
								</p>
                    	</li>
					</ul>
					</article>
                <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
        	<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
						</div>
					
					</div>
				</div>
			</section>
		</main>


        <?php
get_footer();
?>