<?php
$content = file_get_contents('http://www.utm.my/cache-news.php');
$jsonResult = json_decode($content,true);
