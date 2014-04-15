<?php
$action = isset($_GET['action']) ? $_GET['action'] : "" ; 
$action = sanitize($action);

$copyGET = $_GET;
// unset $['callback & _'] because
// we don't want to wrap with callback, because callback from server UTM are different to callback from server NEWS.
unset($copyGET['interface'],$copyGET['action'],$copyGET['callback'],$copyGET['_']);

$param_str = "";
if (count($copyGET) > 0)
	{
	$param = http_build_query($copyGET,'','&');
	$param_str = "&" . $param;
	}
$content = file_get_contents('http://www.news.utm.my/news.json?type='.$action.$param_str);
$jsonResult = json_decode($content,true);
