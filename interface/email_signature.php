<?php
/*
Email Signiture API
===================
this api retrieve information from Email Signiture server and return JSON results.

Input : $_GET['id']
Output : JSON String
*/
$id = isset($_GET['id']) ? $_GET['id'] : "" ; 
$id = sanitize($id);

$content = file_get_contents("http://corporateaffairs.utm.my/emailsign_api/?id=".$id);
$jsonResult = json_decode($content,true);
