<?php
// not using cache-news.php anymore.
$content = file_get_contents('http://www.news.utm.my/news.json?type=list_news&slider=yes');
$jsonResult = json_decode($content,true);
