<!-- 12. Crea un array asociativo para introducir los datos de una persona
 Nombre: Pedro Torres
 Dirección: C/Mayor, 37
 Teléfono: 123456789
Al acabar muestra los datos por pantalla. -->

<?php
$persona = array('Nombre' => "Pedro Torres",
'Direccion' => "C/Mayor, 37",
'Telefono' => "123456789"
);

foreach($persona as $contenido => $datos){
echo "$contenido: $datos<br>";
}



?>