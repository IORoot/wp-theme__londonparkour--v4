<div class="flex flex-col justify-center items-center w-full mt-32 mb-20">

    <?php
    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                                TITLE                                    │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    ?>
	<div class="text-green-500 text-6xl"><?php echo esc_html( get_search_query() ); ?></div>


    <?php
    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                           SERIES & VIDEOS                               │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    ?>

    <?php
        $count = $wp_query->found_posts;
        $f = new \NumberFormatter("en", NumberFormatter::SPELLOUT);
        $spelled = $f->format($count);
    ?>
	<div class="text-3xl font-thin mt-4"><?php echo ucwords($spelled); ?> result<?php if($count > 1){ echo 's';} ?> have been found for this search term. </p></div>

    <?php
    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                                BREADCRUMBS                              │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    ?>
    <div class="h-9 mt-10 md:-mr-10 w-full md:w-auto">
        <?php do_shortcode('[breadcrumb colour="green-500"]'); ?>
    </div>
</div>

