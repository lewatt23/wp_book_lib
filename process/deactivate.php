<?php


function book_lib_deactivate_plugin(){
    
    wp_clear_scheduled_hook('wpl_book_daily_hook');
}