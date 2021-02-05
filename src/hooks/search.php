<?php

//Filter the search for only posts and parts
function remove_trailing_slashes($query)
{
    if ($query->is_search) {
        $query->query_vars['s'] = str_replace('/','',$query->query_vars['s']);
    }
    return $query;
}

add_filter('pre_get_posts', 'remove_trailing_slashes');