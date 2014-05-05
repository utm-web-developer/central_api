<?php
$entry_id = isset($_GET['entry_id']) ? $_GET['entry_id'] : "" ; 
$entry_id = sanitize($entry_id);

$content = file_get_contents("http://corporateaffairs.utm.my/profile_api?entry_id=".$entry_id);
$jsonResult = json_decode($content,true);

