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

Licencia
========

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_CL"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_CL">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 3.0 Unported</a>.