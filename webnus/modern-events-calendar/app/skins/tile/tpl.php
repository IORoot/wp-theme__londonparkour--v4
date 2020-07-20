<?php
/** no direct access **/
defined('MECEXEC') or die();


wp_register_style( 'flickity_css_hp', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
wp_register_script( 'flickity_js_hp', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js' );
wp_enqueue_style( 'flickity_css_hp' );
wp_enqueue_script( 'flickity_js_hp' );


// Get layout path
$render_path = $this->get_render_path();

// before/after Month
$_1month_before = strtotime('first day of -1 month', strtotime($this->start_date));
$_1month_after = strtotime('first day of +1 month', strtotime($this->start_date));

// Current month time
$current_month_time = strtotime($this->start_date);

// Generate Month
ob_start();
include $render_path;
$month_html = ob_get_clean();

if(isset($this->atts['return_only_items']) and $this->atts['return_only_items'])
{
    echo json_encode(
            array(
                'html'=>$month_html, 
                'end_date'=>$this->end_date, 
                'offset'=>$this->next_offset, 
                'count'=>$this->found)
            );
    exit;
}

$navigator_html = '';

$styling = $this->main->get_styling();

$event_colorskin = (isset($styling['mec_colorskin'] ) || isset($styling['color'])) ? 'colorskin-custom' : '';

do_action('mec_start_skin' , $this->id);
do_action('mec_tile_head');
$set_dark = '';
?>
<div id="mec_skin_<?php echo $this->id; ?>" class="mec-wrap <?php echo $event_colorskin . ' ' . $this->html_class . ' ' . $set_dark; ?>">
    
    <?php if($this->sf_status) echo $this->sf_search_form(); ?>
    
    <div class="mec-tile">
        <div class="mec-calendar-topsec">
            <div class="mec-clear">
                <?php if($this->next_previous_button): ?>
                <div class="mec-skin-tile-month-navigator-container">
                    <div class="mec-month-navigator" id="mec_month_navigator_<?php echo $this->id; ?>_<?php echo date('Ym', $current_month_time); ?>"><?php echo $navigator_html; ?></div>
                </div>
                <?php endif; ?>

                <div class="mec-calendar-table" id="mec_skin_events_<?php echo $this->id; ?>">
                    <?php if($this->load_method === 'list'): ?>
                        <?php echo $month_html; ?>
                    <?php else: ?>
                        <div class="mec-month-container mec-month-container-selected" id="mec_tile_month_<?php echo $this->id; ?>_<?php echo date('Ym', $current_month_time); ?>" data-month-id="<?php echo date('Ym', $current_month_time); ?>"><?php echo $month_html; ?></div>
                    <?php endif; ?>
                </div>

                <?php if($this->load_method === 'list' and $this->load_more_button and $this->found >= $this->limit): ?>
                    <div class="mec-load-more-wrap"><div class="mec-load-more-button"><?php echo __('Load More', 'mec'); ?></div></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
</div>