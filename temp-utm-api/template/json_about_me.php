<?php
$username = isset($_GET['username']) ? $_GET['username'] : "" ; 
$username = sanitize($username);

//url = "https://api.about.me/api/v2/json/user/view/".username."?client_id=70430fc6973df6a443ebdb10328d0a8b67568825";
$clientid = "70430fc6973df6a443ebdb10328d0a8b67568825";
$content = file_get_contents("https://api.about.me/api/v2/json/user/view/".$username."?client_id=".$clientid);
$jsonResult = json_decode($content,true);
