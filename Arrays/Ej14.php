<!-- 14. Repite el ejercicio anterior pero ahora si se han de crear índices asociativos,
ejemplo:
El índice del array que contiene como valor Madrid es MD. 
Madrid, Barcelona, Londres, New York,
Los Ángeles y Chicago
-->

<?php
$ciudades = array('MD' => "Madrid",
'BCN' => "Barcelona",
'LND' => "Londres",
'NY' => 'New York',
'L.A' => 'Los Ángeles',
'CH' => 'Chicago'
);

foreach($ciudades as $indice => $ciudad){
    echo "El indice del array que contiene como valor $ciudad es $indice \n";
    echo "<br/>";
}




?>