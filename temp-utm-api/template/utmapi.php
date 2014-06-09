<?php
include UTMAPI_PLUGIN_PATH."template/supportFunction.php";
$type = isset($_GET['type']) ? $_GET['type'] : "" ;

$jsonResult = array();
$sentItRaw = false;
switch ($type) {
    case "iboard":
        include UTMAPI_PLUGIN_PATH."template/json_iboard.php";
        break;
        
    case "events":
        include UTMAPI_PLUGIN_PATH."template/json_events.php";
        break;
    case "news":
        include UTMAPI_PLUGIN_PATH."template/json_news.php";
        break;
    case "news-cache":
        include UTMAPI_PLUGIN_PATH."template/json_news_cache.php";
        break;

    case "podcast":
	 include UTMAPI_PLUGIN_PATH."template/json_podcast.php";
	 break;

    case "about-me":
	 include UTMAPI_PLUGIN_PATH."template/json_about_me.php";
	 break;

    case "connection":
        array_push($jsonResult,array('connection'=>'ok'));
        break;

    default:
    	array_push($jsonResult,array('error'=>'wrong parameter'));
}





function jsonp_encode($data)    
    {
    $json = json_encode($data);
    return isset($_GET['callback']) ? "{$_GET['callback']}(".$json.")" : json_encode($data);
    }


header("HTTP/1.1 200 OK");
header('Content-Type: application/json');

$json = jsonp_encode($jsonResult);    
echo $json;
