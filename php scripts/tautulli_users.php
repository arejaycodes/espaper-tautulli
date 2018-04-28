<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

$URL = "http://PLEXSERVER:PORT/api/v2?apikey=INSERTAPIKEYHERE&cmd=get_activity";
$data = json_decode(file_get_contents($URL), true);

for($c=0;$c<count($data['response']['data']['sessions']);$c++)
        echo $data['response']['data']['sessions'][$c]['friendly_name']." ";
	
?>
