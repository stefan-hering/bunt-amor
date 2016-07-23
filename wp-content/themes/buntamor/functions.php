<?php 

function buntamor_scripts() {
	//wp_enqueue_style( 'buntamor-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'buntamor-js', '/js/buntamor.min.js', array(), '20160412', true );
}

function buntamor_thumbs(){
    add_image_size( 'vertical-thumb', 9999, 300, false);
    add_image_size( 'horizontal-thumb', 300, 9999, false );
}



function buntamor_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer widget 1', 'buntamor' ),
		'id'            => 'footer-1',
		'description'   => __( 'Its a widget and it is in the footer.', 'buntamor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer widget 2', 'buntamor' ),
		'id'            => 'footer-2',
		'description'   => __( 'Its a widget and it is in the footer.', 'buntamor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'after_setup_theme', 'buntamor_thumbs' );
add_action( 'wp_enqueue_scripts', 'buntamor_scripts' );
add_action( 'widgets_init', 'buntamor_widgets_init' );

//Remove emoji crap
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 

//Instagram widget
function instgram_widget_list_class(){
	return 'columns large-3 medium-2 small-4';
}
add_filter( 'wpiw_item_class', 'instgram_widget_list_class' );


?>