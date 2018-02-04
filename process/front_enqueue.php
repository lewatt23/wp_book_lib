<?php


function book_add_enqueue(){
    wp_register_style(
		'wpl_book_main',
		plugins_url( '/inc/styles/main.css',WPL_PLUGIN_URL )
	);

	wp_enqueue_style( 'wpl_book_main');
    
    wp_register_style(
		'wpl_book_front',
		plugins_url( '/inc/front/rateit/rateit.css',WPL_PLUGIN_URL )
	);

	wp_enqueue_style( 'wpl_book_front');
    
    
     wp_register_script(
		'wpl_book_rateitjs',
		plugins_url( '/inc/front/rateit/jquery.rateit.min.js', WPL_PLUGIN_URL,array('jquery'),'1.0.0',true)
	);

	wp_enqueue_script( 'wpl_book_rateitjs');

}