
<div class="flex justify-center pb-10">
<?php
echo paginate_links([
    'prev_text'         => '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-0.5 md:mx-1 lg:mx-2 hover:text-green-500">Newer</div>',
    'next_text'         => '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-0.5 md:mx-1 lg:mx-2 hover:text-green-500">Older</div>',
    'type'              => 'plain',
    'before_page_number'=> '<div class="inline-block border-2 border-night rounded-xl py-2 px-4 mx-0.5 md:mx-1 lg:mx-2 hover:text-green-500">',
    'after_page_number' => '</div>',
]); 
?>
<style>
    .current div {background-color: #F3F4F6}
</style>
</div>