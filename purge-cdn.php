<?php
// Using composer. Set your path here
require_once '/Users/sharulhafiz/vendor/autoload.php';

// CDN id
$id = '64167';
//$api->delete('/zones/pull.json/'.$id);

// CDN Account Info
$api = new NetDNA("pejabathalehwalk","2ba8ef1728afd0555d632d5f0e452d5505191d33d","0e5790b9292a74c84be15cb326a549a3");

// delete a file from the cache
$params = array('file' => '/dev/2014/js/central_api.js');
echo $api->delete('/zones/pull.json/'. $id .'/cache', $params);

?>