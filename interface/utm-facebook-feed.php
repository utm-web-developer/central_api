<?php
require 'facebook-php-sdk/src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '290239217808174',
  'secret' => 'b667d6feffff3c86c60306b96a7e7f9a',
));

/* make the API call */
$response = $facebook->api(
    "/univteknologimalaysia/feed",
    "GET"
);

$message = array();
for ($i=0; $i<count($response['data']); $i++)
    {
    array_push($message,array($response['data'][$i]['message'],$response['data'][$i]['created_time']));
    }
$jsonResult = $message;

