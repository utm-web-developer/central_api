<?php
// not using cache-events.php anymore
$content = file_get_contents('http://events.utm.my/json_query');
$jsonResult = json_decode($content,true);
