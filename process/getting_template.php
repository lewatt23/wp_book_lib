<?php 

function wp_book_template($template){
    
    if ('book' == get_post_type(get_queried_object_id()) && !$template) {
        // if you're here, you're on a singlar page for your costum post 
        // type and WP did NOT locate a template, use your own.
        $template = WPL_PLUGIN_URL . 'inc/template/wbl-template.php';
            return $template;

    }
   
    return $template;
}



