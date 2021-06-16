<?php
    $count = $wp_query->found_posts;
    $f = new \NumberFormatter("en", NumberFormatter::SPELLOUT);
    $spelled = $f->format($count);
?>
<div class="text-3xl font-thin mt-4"><?php echo ucwords($spelled); ?> result<?php if($count > 1){ echo 's';} ?> have been found for this search term. </p></div>
