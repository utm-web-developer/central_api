<?php
/*
# we want text output for debugging. Either this works or you need to look into
# source in your browser (or even better, debug with the `curl` commandline client.)
header('Content-Type: text/plain');

# For quick and dirty debugging - start to tell about if something is worth
# to warn or notice about. (do logging in production)
error_reporting(~0); ini_set('display_errors', 1);


$results = file_get_contents('http://www.utm.my/iboard/jsoniboard');
var_dump($http_response_header, $results);
*/
$content = file_get_contents('http://www.utm.my/iboard/jsoniboard');
//var_dump($content);
$jsonResult = json_decode($content,true);

