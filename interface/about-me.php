<?php
/*
About.me API
============
this api retrieve information from About.me server and return JSON results.

Input : $_GET['username']
Output : JSON String
*/
$username = isset($_GET['username']) ? $_GET['username'] : "" ; 
$username = sanitize($username);

$clientid = "70430fc6973df6a443ebdb10328d0a8b67568825";
$content = file_get_contents("https://api.about.me/api/v2/json/user/view/".$username."?client_id=".$clientid);
$jsonResult = json_decode($content,true);
