<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label><img src="<?php echo get_template_directory_uri() . "/assets/images/search.svg"; ?>" alt="search icon"></label>
    <input type="text" class="search-field" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
    <!-- <input type="submit" value="Search"> -->
</form>