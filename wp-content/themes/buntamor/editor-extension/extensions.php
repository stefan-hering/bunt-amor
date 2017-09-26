<?php
add_action( 'init', 'buntamor_buttons' );
function buntamor_buttons() {
    add_filter( "mce_external_plugins", "buntamor_add_buttons" );
    add_filter( 'mce_buttons', 'buntamor_register_buttons' );
}
function buntamor_add_buttons( $plugin_array ) {
    $plugin_array['buntamor'] = get_template_directory_uri() . '/editor-extension/cards.js';
    return $plugin_array;
}
function buntamor_register_buttons( $buttons ) {
    array_push( $buttons, 'cards', 'cards' ); 
    return $buttons;
}
?>