<?php
$hashtag = isset($_GET['hashtag']) ? sanitize($_GET['hashtag']) : "" ;
$content = file_get_contents('http://twitcher.steer.me/search?q=utmjb+'.$hashtag.'&key=3673taez');
$jsonResult = json_decode($content,true);
