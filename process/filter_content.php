<?php


function filter_book_content($content){
    
   if(!is_singular('book')){
       return $content;
   }
    
    else{
        global $post;
        $wl_data = get_post_meta($post->ID,'wbl_data',true);

        return $content.$wl_data['name'];
    }
    
}