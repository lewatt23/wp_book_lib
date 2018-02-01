<?php


//function  to  activate  plugin 

function  book_lib_activate_plugin(){
    
     if(version_compare(get_bloginfo('version'),'4.5','<')){
          
        wp_die(__('You  must update your  wordpress  version before  using  '));
        
    }
    
}