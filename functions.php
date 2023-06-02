<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

#
# security from  https://sekurak.pl/jak-zabezpieczyc-wordpress-poradnik-krok-po-kroku/
#

# Remove version from the generator
function remove_wp_version_rss() {
	return '';
}

add_filter('the_generator', 'remove_wp_version_rss');


# Remove version from css and js
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
 
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );


# Enumeration of users
function author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}

add_action( 'template_redirect', 'author_page_redirect' );

#
# END scurity
#


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
