<?php
$username = "utm";
$password = "tH9taCHe";
$remote_url = 'http://scival-expert.utm.my/api/expert/1';

// Return Type:XML
function getUrl( $url, $username = false , $password = false ) {
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_HEADER, FALSE); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 

  if( $username && $password ) {
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password"); 
  }

  $buffer = curl_exec($ch); 
  curl_close($ch); 

  return $buffer;
}

?>
