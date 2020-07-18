<?php
/** no direct access **/
defined('MECEXEC') or die();


$styling = $this->main->get_styling();
$event_colorskin = (isset($styling['mec_colorskin'] ) || isset($styling['color'])) ? 'colorskin-custom' : '';
$display_label = isset($this->skin_options['display_label']) ? $this->skin_options['display_label'] : false;
$reason_for_cancellation = isset($this->skin_options['reason_for_cancellation']) ? $this->skin_options['reason_for_cancellation'] : false;
$settings = $this->main->get_settings();

$map_events = array();
?>
<div class="mec-wrap <?php echo $event_colorskin; ?>">
    <div class="mec-event-tile-view">
        <div class="events main-carousel" data-flickity=' { "groupCells": true, "contain": true, "pageDots": false, "prevNextButtons": true } '>
            <?php
            $count = 8;
            $rcount = 1 ;
            foreach($this->events as $date):

                foreach($date as $event):

                    $map_events[] = $event;
                    
                    echo '<div class="event carousel-cell">';


                    $location = isset($event->data->locations[$event->data->meta['mec_location_id']])? $event->data->locations[$event->data->meta['mec_location_id']] : array();
                    $start_time = (isset($event->data->time) ? $event->data->time['start'] : '');
                    $event_start_date = !empty($event->date['start']['date']) ? $event->date['start']['date'] : '';
                    $event_color = isset($event->data->meta['mec_color']) ? '#'.$event->data->meta['mec_color'] : '';
                    $background_image = (isset($event->data->featured_image['full']) && trim($event->data->featured_image['medium'])) ? ' url(\''.trim($event->data->featured_image['full']).'\')' : '';
                    // Multiple Day Event Class
                    $me_class   = $event_start_date == $event->date['end']['date'] ? '' : 'tile-multipleday-event';

                    $label_style = '';
                    if(!empty($event->data->labels))
                    {
                        foreach($event->data->labels as $label)
                        {
                            if(!isset($label['style']) or (isset($label['style']) and !trim($label['style']))) continue;

                            if($label['style'] == 'mec-label-featured') $label_style = esc_html__('Featured' , 'mec');
                            elseif($label['style'] == 'mec-label-canceled') $label_style = esc_html__('Canceled' , 'mec');
                        }
                    }

                    // MEC Schema
                    do_action('mec_schema', $event);
                    ?>

                    <a class="mec-color-hover" data-event-id="<?php echo $event->data->ID; ?>" href="<?php echo $this->main->get_event_date_permalink($event->data->permalink, $event->date['start']['date']); ?>">
                        <article 
                            <?php echo 'style="background-color:' . $event_color.'; background-image:' . $background_image. '"'; ?> 
                            data-style="<?php echo $label_style; ?>" 
                            class="<?php echo ((isset($event->data->meta['event_past']) and trim($event->data->meta['event_past'])) ? 'mec-past-event' : ''); ?> mec-event-article mec-tile-item <?php echo $me_class; ?> mec-clear <?php echo $this->get_event_classes($event); ?>">
                            
                            <?php do_action('mec_skin_tile_view', $event); ?>
                        </article>
                        
                        <div class="class-overlay">
                            <div class="button button__arrow--right mdi__pseudo--sky">
                                <span>Booking Page</span>
                            </div>
                        </div>
                    </a>

                    <div class="class-meta" <?php echo 'style="background-color:' . $event_color.';"'; ?>    >

                        <div class="event-tile-view-head clearfix">
                            <span class="mec-event-day"><?php echo $this->main->date_i18n('l', strtotime($event->date['start']['date'])); ?> </span>
                            <i class="mdi mdi-calendar mdi--mist"></i>
                            <?php if(isset($settings['multiple_day_show_method']) && $settings['multiple_day_show_method'] == 'all_days') : ?>
                                <div class="mec-event-date"><?php echo $this->main->date_i18n($this->date_format_clean_1, strtotime($event->date['start']['date'])); ?></div>
                                <div class="mec-event-month"><?php echo $this->main->date_i18n($this->date_format_clean_2, strtotime($event->date['start']['date'])); ?></div>
                            <?php else: ?>
                                <div class="mec-event-month"><?php echo $this->main->dateify($event, $this->date_format_clean_1 .' '. $this->date_format_clean_2); ?></div>
                            <?php endif; ?>
                            <div class="mec-event-time"><i class="mdi mdi-clock mdi--mist"></i><?php echo $start_time; ?></div>
                        </div>

                        <div class="mec-event-content">
                            <div class="mec-event-detail"><?php echo (isset($location['name']) ? '<i class="mdi mdi-map-marker mdi--mist"></i>' . $location['name'] : ''); ?></div>
                            <?php echo $this->main->get_normal_labels($event, $display_label).$this->main->display_cancellation_reason($event->data->ID, $reason_for_cancellation); ?>
                            <!-- <h4 class="mec-event-title"><?php echo $this->main->get_flags($event->data->ID, $event_start_date); ?></h4> -->
                        </div>

                    </div>

                    <?php
                    echo '</div>';
                    
                    ?>
                <?php endforeach; ?>


            <?php endforeach; ?>
        </div>
    </div>
    <?php
        $div_count = count($map_events) - (floor(count($map_events) / $count) * $count);
        if($div_count > 0 and $div_count < $count) echo '</div>';
    ?>
</div>