<?php


function wp_book_save_post($post_id,$post,$update){
  
    if(!$update){
        return;
    }
    
   $wbl_data = array();
    
   $wbl_data['name'] = sanitize_text_field($_POST['author_name']);
   $wbl_data['about'] = sanitize_text_field($_POST['author_about']);
   $wbl_data['contact'] = sanitize_text_field($_POST['author_num']);
   $wbl_data['price'] = sanitize_text_field($_POST['author_price']);
   $wbl_data['level'] = sanitize_text_field($_POST['author_level']);
   $wbl_data['subject'] = sanitize_text_field($_POST['author_subject']);
   $wbl_data['summary'] = sanitize_text_field($_POST['author_summary']);
    
   
    update_post_meta($post_id,'wbl_data',$wbl_data);
}

