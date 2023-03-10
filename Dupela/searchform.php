<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input class="search-input" type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
        <input class="search-button" type="submit" id="searchsubmit" value="" />
    </div>
</form>

 