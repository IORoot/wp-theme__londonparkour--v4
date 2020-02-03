<?php
/*                                                                              
*   ┌─────────────────────────────────────────────────────────────────────────┐ 
*   │                                                                         │░
*   │                               Search box                                │░
*   │                                                                         │░
*   │                            Used on /articles                            │░
*   │                                                                         │░
*   └─────────────────────────────────────────────────────────────────────────┘░
*    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
*/                                                                              
?>

<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform" class="articlesearchform">
    <input type="text" name="s" placeholder="Search Articles"/>
    <input type="hidden" name="post_type" value="article" /> <!-- // hidden 'article' value -->
</form>
