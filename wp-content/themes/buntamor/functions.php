<?php 

function buntamor_scripts() {
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', '/js/app.min.js', array(), '20160412', true );
}
add_action( 'wp_enqueue_scripts', 'buntamor_scripts' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
?>