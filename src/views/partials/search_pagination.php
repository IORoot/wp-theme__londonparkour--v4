
<div class="flex justify-center pb-10">
<?php
echo paginate_links([
    'prev_text'         => '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-2 hover:text-goo">Newer</div>',
    'next_text'         => '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-2  hover:text-goo">Older</div>',
    'type'              => 'plain',
    'before_page_number'=> '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-2  hover:text-goo">',
    'after_page_number' => '</div>',
]); 
?>
</div>