<?php

function wp_book_create_metaboxes(){
    add_meta_box(
    'wp_book_lib_options_mb',
    __('Book Options','book'),
    'wp_book_lib_options_mb',
    'Book',
    'normal',
    'high'    
        
        
    );
    
}