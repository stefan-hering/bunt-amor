<?php 

function buntamor_scripts() {
	wp_enqueue_style( 'buntamor-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'buntamor-js', '/js/buntamor.min.js', array(), '20160412', true );
}

function buntamor_thumbs(){
    add_image_size( 'vertical-thumb', 9999, 300, false);
    add_image_size( 'horizontal-thumb', 300, 9999, false );
}

add_action( 'after_setup_theme', 'buntamor_thumbs' );

add_action( 'wp_enqueue_scripts', 'buntamor_scripts' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 


?>