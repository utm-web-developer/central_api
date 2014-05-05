<?php
require_once ("supportFunction.php");
// register interface here
// you can close any api for maintainance by ( $interface["api-name"] = false )
$interface = array();
$interface["about_me"] = true; // &username=
$interface["podcast"] = true;
$interface["utm_event"] = true;
$interface["iboard"] = true;
$interface["utm_news_latest"] = true;
$interface["scival"] = true;
$interface["news"] = true;
$interface["utm_facebook_feed"] = true;
$interface["twitter_hashtag"] = true;
$interface["profile"] = true;
////////////////////////////////////
// Do not edit after this line
////////////////////////////////////

$interface_type = isset($_GET['interface']) ? sanitize($_GET['interface']) : "" ;

if ($interface_type == "")
	{
	echo "This is the access to UTM API. Click <a href='./index.html'>here</a> to learn to use it.";
	exit();
	}

$jsonResult = array();
$sentItRaw = false;

if(@$interface[$interface_type] === true) // interface is available
	{
	include dirname(__FILE__)."/interface/".$interface_type.".php";
	}
else if(@$interface[$interface_type] === false)
	{
	array_push($jsonResult,array('error'=>'API closed for maintenance'));
	}
else
	{
	array_push($jsonResult,array('error'=>'API not exists!'));
	}

header("HTTP/1.1 200 OK");
header('Content-Type: application/json');

$json = jsonp_encode($jsonResult);    
echo $json;
