<?php
/** no direct access **/
defined('MECEXEC') or die();

$this->localtime = isset($this->skin_options['include_local_time']) ? $this->skin_options['include_local_time'] : false;
$display_label = isset($this->skin_options['display_label']) ? $this->skin_options['display_label'] : false;
$reason_for_cancellation = isset($this->skin_options['reason_for_cancellation']) ? $this->skin_options['reason_for_cancellation'] : false;

?>
<ul class="mec-daily-view-dates-events">
    <?php foreach($this->events as $date=>$events): ?>
    <li class="mec-daily-view-date-events mec-util-hidden" id="mec_daily_view_date_events<?php echo $this->id; ?>_<?php echo date('Ymd', strtotime($date)); ?>">
        <?php if(count($events)): ?>
        <div class="events">
            <?php foreach($events as $event): ?>
                <div class="event">
                    <?php
                        $location = isset($event->data->locations[$event->data->meta['mec_location_id']])? $event->data->locations[$event->data->meta['mec_location_id']] : array();
                        $start_time = (isset($event->data->time) ? $event->data->time['start'] : '');
                        $end_time = (isset($event->data->time) ? $event->data->time['end'] : '');
                        $event_color =  isset($event->data->meta['mec_color'])?'<span class="event-color" style="background: #'.$event->data->meta['mec_color'].'"></span>':'';
                        $event_start_date = !empty($event->date['start']['date']) ? $event->date['start']['date'] : '';

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
                    
                    <?php

                        $article = '<article data-style="'.$label_style .'" ';
                        $article .= 'class="';
                            $article .= (isset($event->data->meta['event_past']) and trim($event->data->meta['event_past'])) ? 'mec-past-event ' : '';
                            $article .= ' mec-event-article ';
                            $article .= $this->get_event_classes($event);
                        $article .= '">';

                        // Image
                        $image = $event->data->thumbnails['medium'];
                        $image = str_replace('class="', 'class="lazyload ', $image);
                        $article .= '<div class="mec-event-image">'. $image .'</div>';

                        // Start Time
                        if(trim($start_time)) {
                            $article .= '<div class="mec-event-time mec-color">';
                            $article .= '<i class="mec-sl-clock-o"></i>';
                            $article .= $start_time . (trim($end_time) ? ' - '.$end_time : '');
                            $article .= '</div>';
                        } 

                        // Title
                        $article .= '<h4 class="mec-event-title">';
                            $article .= '<a class="mec-color-hover" '; 
                                $article .= 'data-event-id="'. $event->data->ID . '"'; 
                                $article .= 'href="'. $this->main->get_event_date_permalink($event->data->permalink, $event->date['start']['date']) . '">'; 
                            $article .= $event->data->title; 
                            $article .= $this->main->get_flags($event->data->ID, $event_start_date); 
                            $article .= $event_color;
                            $article .= $this->main->get_normal_labels($event, $display_label);
                            $article .= $this->main->display_cancellation_reason($event->data->ID, $reason_for_cancellation);
                        $article .= '</a></h4>'; 

                        // Localtime
                        if($this->localtime) {
                            $article .= $this->main->module('local-time.type3', array('event'=>$event));
                        }
                        
                        // Location
                        $article .= '<div class="mec-event-detail">'. (isset($location['name']) ? $location['name'] : '') . '</div>';

                        $article .= '</article>';

                        echo $article;
                    ?>

                </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <article class="mec-event-article"><div class="mec-daily-view-no-event mec-no-event"><?php _e('No event', 'mec'); ?></div></article>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<div class="mec-event-footer"></div>