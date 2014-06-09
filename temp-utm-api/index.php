<?php
/**
 * @package misterpah - UTMAPI
 * @version 0.2
 */
/*
Plugin Name: UTM API
Plugin URI: http://www.utm.my
Description: provide JSON interface for API Services
Author: Misterpah
Version: 0.2
Author URI: http://misterpah.com
*/

// var prefix UTMAPI

$url = plugin_dir_path(__FILE__);

global $wpdb;
define("UTMAPI_PLUGIN_NAME",basename($url));
define("UTMAPI_PLUGIN_PATH",plugin_dir_path(__FILE__));
define("UTMAPI_PLUGIN_URL",WP_PLUGIN_URL . "/".UTMAPI_PLUGIN_NAME."/");



function UTMAPI_override_specific_url_template($template){

    // is a specific custom taxonomy being shown?

    $temp = explode("/",$_SERVER['REQUEST_URI']);
    $tempLen = count($temp) -1;
    $currentUrl = $temp[$tempLen];
    $exploded_url = explode ("?",$currentUrl);

    if ($exploded_url[0] == "api")
    {
        $template = UTMAPI_PLUGIN_PATH.'template/utmapi.php';
    }
  return $template;

 }
 add_filter('template_include','UTMAPI_override_specific_url_template');
