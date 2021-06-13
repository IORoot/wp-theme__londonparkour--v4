<?php
/**
 * Loaded by using the hooks/theme_partials.php
 * 
 */
?>

<form class="fill-fog flex relative" action="/" method="get">
    <svg class="h-7 w-7 pr-2 absolute right-0 fill-green-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/></svg>
    <input class="h-7 rounded bg-green-700 p-2 text-white font-thin placeholder-green-500" placeholder="Search" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
</form>
