CityBikes
=========

Pequeño script que permite obtener los datos entregados por http://api.citybik.es/

Como usar?
==========

para obtener las redes o networks

$aNetworks = CityBikes::get_networks();

para obtener un system

$system_url = $aNetworks[2]->url;
$aSystem = CityBikes::get_system($system_url);

eso (:

Ejemplo
=======

puedes consultar el archivo index.php que contiene un ejemplo de uso