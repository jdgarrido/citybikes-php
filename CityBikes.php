<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CityBikes {
    public function get_networks() {
        $url = 'http://api.citybik.es/networks.json';
        $json_net = file_get_contents($url);
        $aNetworks = json_decode($json_net);
        
        return $aNetworks;
    }
    
    public function get_system($sys_url) {
        $json_sys = file_get_contents($sys_url);
        $aSystem = json_decode($json_sys);
        
        return $aSystem;
    }
}
?>
