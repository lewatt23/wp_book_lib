<?php

//Here we add the  hooks  and  include  for  the admin  panel  


function wp_book_admin_init(){
    
    //include file  in admin panel
    include('book_metaboxes.php');
    include('wp_book_options.php');
    
    //adding  hooks  to  the admin  panel 
    add_action('add_meta_boxes_book','wp_book_create_metaboxes');
}