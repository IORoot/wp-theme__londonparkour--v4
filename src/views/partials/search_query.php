<?php
    $texture_ids = rand(2498, 2457);
    $background_url = do_shortcode('[random_image_url ids="'.$texture_ids.'"]'); 
?>

<div class="rounded-lg h-96 block mb-10 bg-cover overflow-hidden" style="background-image:url('<?php echo $background_url; ?>');"  >
    <div class="w-full h-full flex flex-col justify-center items-center bg-opacity-50 bg-black text-white">
        <div class="text-5xl"><?php echo esc_html( get_search_query() ); ?></div>
        <div class="text-lg font-smoke w-1/2 pt-10 text-center"><?php echo $wp_query->found_posts; ?> results.</div>
    </div>
</div>