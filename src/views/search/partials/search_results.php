<?php
    the_post();
?>

<div class="" >
                
    <a class="flex flex-col relative rounded-2xl overflow-hidden bg-<?php echo $post->post_type; ?>-500 hover:bg-gray-200 text-white hover:text-black" href="<?php echo get_permalink($post);?>">
        

        <?php
        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                                                                         │
        // │                                 BLOG                                    │
        // │                                                                         │
        // └─────────────────────────────────────────────────────────────────────────┘
        ?>
        <div class="text-white text-xs font-semibold bg-<?php echo $post->post_type; ?>-500 absolute top-4 right-4 px-2 py-0.5 rounded uppercase"><?php echo $post->post_type; ?></div>
        
        <?php
        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                                                                         │
        // │                                 IMAGE                                   │
        // │                                                                         │
        // └─────────────────────────────────────────────────────────────────────────┘
        ?>
        <img class="w-full bg-white object-center object-cover lazyload" src="<?php echo get_the_post_thumbnail_url($post);?>">
        

        <div class="flex-1 flex flex-col justify-center p-6">

            <?php
            // ┌─────────────────────────────────────────────────────────────────────────┐
            // │                                                                         │
            // │                                 TITLE                                   │
            // │                                                                         │
            // └─────────────────────────────────────────────────────────────────────────┘
            ?>
            <div class="text-lg h-16 mb-1 pb-1 leading-7">
                <?php 
                    echo ucwords($post->post_title);
                ?>
            </div>

            <?php
            // ┌─────────────────────────────────────────────────────────────────────────┐
            // │                                                                         │
            // │                                 DATE                                    │
            // │                                                                         │
            // └─────────────────────────────────────────────────────────────────────────┘
            ?>
            <div class="text-gray-100 text-xs font-thin"><?php echo the_time('F j, Y'); ?></div>

            <?php
            // ┌─────────────────────────────────────────────────────────────────────────┐
            // │                                                                         │
            // │                                 TAGS                                    │
            // │                                                                         │
            // └─────────────────────────────────────────────────────────────────────────┘
            ?>
            <div class="mt-3">
            <?php 
                foreach(get_the_terms($post, 'blog_tags') as $tag){
                    ?>
                    <div class="text-white text-xs bg-<?php echo $post->post_type; ?>-800 self-start px-2 py-0.5 mr-0.5 mb-1 inline-block rounded">
                        <?php echo strtoupper($tag->name); ?>
                    </div>
                    <?php
                }
            ?>
            </div>
            
        </div>

    </a>

</div>