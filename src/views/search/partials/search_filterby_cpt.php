<?php

    $html = [];

    $cpts = [
        'tutorial',
        'demonstration',
        'blog',
    ];

    // wrapper
    $html[] = '<div class="flex gap-2 mt-10 mb-2 justify-center">';

    foreach ($cpts as $cpt)
    {
        
        // check if one is already set in url, so we can highlight that box 
        // and create a toggle to switch it off again.
        // and create new url with taxonomy name in it.
        $background = $cpt.'-100';
        $hover      = $cpt.'-500';
        $url = add_query_arg('post_type', $cpt);


        if ($_GET['post_type'] == $cpt){ 
            $background = $cpt.'-500';
            $hover      = 'gray-300';
            // remove the query to toggle it off.
            $url        = add_query_arg('post_type', ''); 
            $url        = str_replace('&post_type','',$url);
        }

        $html[] = '<a href="'.$url.'" class="w-full  bg-'.$background.' rounded h-20 flex flex-col justify-center text-black hover:text-white hover:bg-'.$hover.'">';
            $html[] = '<div class=" text-center font-thin">';
                $html[] = ucwords($cpt) .'s';
            $html[] = '</div>';
        $html[] = '</a>';
    }

    // close wrapper
    $html[] = '</div>';


    echo implode('', $html);

?>