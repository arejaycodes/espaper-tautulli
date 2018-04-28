<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

$URL = "http://PLEXSERVER:PORT/api/v2?apikey=INSERTAPIKEYHERE&cmd=get_activity";
$data = json_decode(file_get_contents($URL),true);

$sc = $data['response']['data']['stream_count'];
$bw = $data['response']['data']['total_bandwidth'];
$tc = $data['response']['data']['stream_count_transcode'];
$dp = $data['response']['data']['stream_count_direct_play'];

$sc2 = str_replace(chr(34), chr(39), $sc); 	// Remove quotes around stream_count
$info = array($sc2, $bw, $tc, $dp);			// build an array

echo json_encode($info);					// Encode & display new JSON array

//print $stream_count;
//print $bw;
//print_r($data);

?>
