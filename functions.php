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
/* # Removed because after updating Wordpress, a white screen is displayed when adding an entry.
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
 
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
*/
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
