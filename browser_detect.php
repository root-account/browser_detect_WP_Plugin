<?php
/**
 * Plugin Name: Browser Detect
 * Plugin URI: http://aglet.co.za
 * Description: This detects user browsers and versions
 * Version: 1.0.0
 * Author: Aglet
 * Author URI: http://aglet.co.za
 * License: GPL2
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//Add Settings page
add_action('admin_menu', function() {
  add_options_page( 'Plugin settings page Title', 'Browser Detect', 'manage_options', 'browser_detect', 'browser_detect_plugin_page' );
});

//Require file that holds plugin settings
require_once("includes/settings-page.php");


//Add scripts and styles
function themeslug_enqueue_style() {
	$plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'core', $plugin_url  .'css/browser_detect.css', false );
	wp_enqueue_style( 'icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
}

function themeslug_enqueue_script() {
	$plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_script( 'main-js', $plugin_url  .'js/browser_detect.js',  array('jquery'), null, false );

}


  if(!(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))){

  }else{
  	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
  }

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

?>
