<?php

/*
 * Example of how to use
 */

include('CityBikes.php');

//for get the networks

$aNetworks = CityBikes::get_networks();
echo '<pre>';
print_r($aNetworks);
echo '<pre>';


//for get a system
$system_url = $aNetworks[2]->url;
$aSystem = CityBikes::get_system($system_url);

echo '<pre>';
print_r($aSystem);
echo '<pre>';
?>
