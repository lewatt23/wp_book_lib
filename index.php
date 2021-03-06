<?php
/*
*Plugin Name: wp_book_lib
*Description:A simple wp  plugin that  allow wp  users to create thier  own lib of book  by  permitting  users (book authors)  to  be able to  register and post thier books 
*Author:Mfou'ou medjo stanly
*Text Domain:Wp_book_lib
*
*/


//security checks


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


if(!function_exists('add_action')){
    die("Hi  there ! I'm just  a  plugin , not  much I can  do  when  called directly. ");
}




//Setup



//table prefix
define ( 'WPL_PREFIX', 'wpl' );


//defining plugin  url path 
//we check  is our url  is https or not then we define our  plugin  path 

if( $_SERVER['REQUEST_SCHEME'] == "https" ){
	define ( 'WPL_URL',  str_replace( "http://", "https://", WP_PLUGIN_URL . '/wp_book_lib' ) );
} else {
	define ( 'WPL_URL', WP_PLUGIN_URL . '/wp_book_lib/' );
}

//defining  our  plugin path

define ( 'WPL_PATH', WP_PLUGIN_DIR .'/wp_book_lib/' );

define('WPL_PLUGIN_URL',__FILE__);



//Includes 

include('process/activate.php');
include('process/init.php');
include('admin/admin_init.php');
include('admin/process/wp_book_save.php');
include('process/filter_content.php');
include('process/getting_template.php');
//enqueue styles
include('process/enqueue.php');
include('process/front_enqueue.php');
include('admin/process/widget_init.php');
include('admin/widgets/daily_book.php');
include('admin/process/cron.php');
include('process/deactivate.php'); 

//Hooks
register_activation_hook(__FILE__,'book_lib_activate_plugin'); 
register_deactivation_hook(__FILE__,'book_lib_deactivate_plugin');
add_action('init','wp_book_init');
add_action('admin_init','wp_book_admin_init');
add_action( 'admin_enqueue_scripts', 'wpl_add_enqueue');
add_action('save_post_book','wp_book_save_post',10,3);
add_filter('single_template', 'wp_book_template');
add_filter('the_content','filter_book_content');
add_action('wp_enqueue_scripts','book_add_enqueue',100);
add_action('widgets_init','wp_book_init_widgets');
add_action('wpl_book_daily_hook','wpl_genrate_daily_book');
//ShortCodes

