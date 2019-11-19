<?php

add_filter( 'w3tc_can_print_comment', function( $w3tc_setting ) { return false; }, 10, 1 );