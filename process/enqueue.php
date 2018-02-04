<?php


function wpl_add_enqueue(){
    
    global $typenow;

	if( $typenow != "book" ){
		return;
	}

    
    
	wp_register_style(
		'wpl_book_bootstrap',
		plugins_url( 'inc/styles/bootstrap.css',WPL_PLUGIN_URL )
	);

	wp_enqueue_style( 'wpl_book_bootstrap');
    
       
	wp_register_style(
		'wpl_book_main',
		plugins_url( 'inc/styles/main.css',WPL_PLUGIN_URL )
	);

	wp_enqueue_style( 'wpl_book_main');
    
    
    wp_register_script(
		'wpl_book_bootstrapjs',
		plugins_url( 'inc/js/bootstrap.min.js', WPL_PLUGIN_URL)
	);

	wp_enqueue_script( 'wpl_book_bootstrapjs');
}
    