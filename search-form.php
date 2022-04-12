<!-- Search form component
esc_url clear the url and home_url retrieves the URL for the current site where the front end is accessible.
the_search_query displays the content of the search query if available-->

<form role="search" action="<?php echo esc_url(home_url('/')); ?>" method="GET" id="searchform" class="searchform">
    <div>
        <label class="soktext"  >Sök efter:</label>
        <input name="s" id="s" type="text" value="<?php the_search_query();?>" />
        <input type="submit" value="Sök" />
    </div>
</form>