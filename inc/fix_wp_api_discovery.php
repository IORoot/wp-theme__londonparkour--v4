<?php

// W3 Validator moans about the error: 
// Bad value “https://api.w.org/” for attribute “rel” on element “link”: The string “https://api.w.org/” is not a registered keyword.
//
// https://stackoverflow.com/questions/58948416/invalid-html-code-generated-by-wordpress-link-rel-https-api-w-org
// This fixes that.


// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);