<?php

?>

<div class="w-full mt-4 mb-10">
    <input type="checkbox" id="filters">

    <label class="filter-label cursor-pointer hover:underline w-40 h-14 bg-gray-200 m-auto rounded-2xl flex" for="filters">
        <div class="flex-1 m-auto text-center font-thin text-sm">Filters</div>
        <svg class="w-6 h-14 mr-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6,13H18V11H6M3,6V8H21V6M10,18H14V16H10V18Z"/></svg>
    </label>

    <div class="filter-content overflow-hidden ">
        <?php include( __DIR__.'/search_filterby_cpt.php' ); ?>
		<?php include( __DIR__.'/search_filterby_glyph.php' ); ?>
    </div>

</div>

<style>
    #filters {
        position: absolute;
        opacity: 0;
        z-index: -1;
    }

    #filters:checked ~ .filter-content {
        max-height: 100vh;
        opacity: 1;
    }

    .filter-content {
        max-height: 0;
        opacity: 0;
        transition: all .35s;
    }
</style>