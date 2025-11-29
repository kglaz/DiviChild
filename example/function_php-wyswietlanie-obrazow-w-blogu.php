<?php
// Poprawia wyświtlanie obrazów w BLOGu, domyślnie skalowane są na 400x250
// co powoduje, że gdy wymuszamy wyświetlanie obrazu jako kwadrat jest on 
// z tej wartości niepoprawnie powiększany i pojawia się pikselizacja.
// źródło: https://www.eleganttweaks.com/divi/changing-portfolio-blog-module-thumbnail-sizes/

// Begin custom image size for Blog Module
add_filter( 'et_pb_blog_image_height', 'blog_size_h' );
add_filter( 'et_pb_blog_image_width', 'blog_size_w' );

function blog_size_h($height) {
	return '600';
}

function blog_size_w($width) {
	return '600';
}

add_image_size( 'custom-blog-size', 600, 600 );
// End custom image size for Blog Module
