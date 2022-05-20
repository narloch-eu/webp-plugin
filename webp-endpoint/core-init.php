<?php 
/*
*
*	***** webp endpoint *****
*
*	This file initializes all WE Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('WE_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('WE_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('WE_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('WE_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function we_register_core_css(){
wp_enqueue_style('we-core', WE_CORE_CSS . 'we-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'we_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function we_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('we-core', WE_CORE_JS . 'we-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'we_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( WE_CORE_INC . 'we-core-functions.php' ) ) {
	require_once WE_CORE_INC . 'we-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( WE_CORE_INC . 'we-ajax-request.php' ) ) {
	require_once WE_CORE_INC . 'we-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( WE_CORE_INC . 'we-shortcodes.php' ) ) {
	require_once WE_CORE_INC . 'we-shortcodes.php';
}