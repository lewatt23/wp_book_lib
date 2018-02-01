<?php
/*
*Plugin Name: wp_book_lig
*Description:A simple wp  plugin that  allow wp  users to create thier  own lib of book  by  permitting  users (book authors)  to  be able to  register and post thier books 
*Author:Mfou'ou medjo stanly
*Text Domain:Wp-post-to-pdf-download
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
	define ( 'WPL_URL', WP_PLUGIN_URL . '/wp_book_lib' );
}

//defining  our  plugin path

define ( 'WPL_PATH', WP_PLUGIN_DIR . '/wp_book_lib' );



//Includes 



//Hooks
register_activation_hook(__FILE__,'s_activate_plugin');    


//ShortCodes


