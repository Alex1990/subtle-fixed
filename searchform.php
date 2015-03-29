<form action="<?php bloginfo('url'); ?>" method="get" class="search-wrapper">
    <input type="text" id="s" class="search-input ie-hover ie-focus" 
        value="<?php the_search_query(); ?>" name="s"/>
    <input type="submit" class="search-btn png-fix" value="Search" />
</form>