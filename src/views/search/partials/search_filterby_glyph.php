<?php

    $html = [];

    $glyphs = [
        'balancing'     => 'logo',
        'climbing'      => 'arrows-up',
        'coaching'      => 'polygons',
        'crawling'      => 'stripes',
        'flowing'       => 'dots',
        'jumping'       => 'arches',
        'passing'       => 'left-right',
        'rolling'       => 'sonar',
        'spinning'      => 'hoops',
        'strengthening' => 'layers',
        'swinging'      => 'over-under',
        'vaulting'      => 'triangles',
    ];

    // wrapper
    $html[] = '<div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-2">';

    foreach ($glyphs as $glyph_category => $glyph_name)
    {
        
        // check if one is already set in url, so we can highlight that box 
        // and create a toggle to switch it off again.
        // and create new url with taxonomy name in it.
        $background = 'gray-600';
        $hover      = 'green-500';
        $url = add_query_arg('glyph_cat', $glyph_category);


        if ($_GET['glyph_cat'] == $glyph_category){ 
            $background = 'green-500';
            $hover      = 'gray-300';
            // remove the query to toggle it off.
            $url        = add_query_arg('glyph_cat', ''); 
            $url        = str_replace('&glyph_cat','',$url);
        }

        $html[] = '<a href="'.$url.'" class="w-full bg-'.$background.' rounded h-20 fill-white flex flex-col hover:bg-'.$hover.'">';
            $html[] = '<svg class="w-10 h-10 m-auto"><use xlink:href="#glyph-'.$glyph_name.'"></use></svg>';
            $html[] = '<div class="text-white text-xs text-center font-light mb-2">';
            $html[] = $glyph_category;
            $html[] = '</div>';
        $html[] = '</a>';
    }

    // close wrapper
    $html[] = '</div>';


    echo implode('', $html);

?>