<?php

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                                                         │
// │                     Switch off update notifications                     │
// │                                                                         │
// └─────────────────────────────────────────────────────────────────────────┘
function filter_plugin_updates( $value ) {
    if (isset($value->response['advanced-forms-pro/advanced-forms.php']))
    {
        unset( $value->response['advanced-forms-pro/advanced-forms.php'] );
    }
    if (isset($value->response['advanced-custom-fields-pro/acf.php']))
    {
        unset( $value->response['advanced-custom-fields-pro/acf.php'] );
    }
    
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );