<?php
$content = file_get_contents('http://www.utm.my/iboard/jsoniboard');
$jsonResult = json_decode($content,true);
