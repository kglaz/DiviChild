<?php
// Dostosowanie do ustawy z wrzesnia 2020

/*
// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

add_filter("style_loader_tag", function($tag){
    return str_replace("id='mediaelement-css' " ,"id='medialement-css' property='stylesheet'",  $tag);
});

add_filter("style_loader_tag", function($tag){
    return str_replace("id='wp-mediaelement-css' " ,"id='wp-medialement-css' property='stylesheet'",  $tag);
});
 */
// END Dostosowanie do ustawy z wrzesnia 2020
