<?php
require_once 'persona.php';
$persona = new Persona();
//Seteamos las propiedades.
$persona->nombre = 'Fernando';
$persona->apellido = 'Gaitan';
$persona->edad = 26;
//Mostramos el resultado de las propiedades.
echo 'Nombre: ' . $persona->nombre . '<br />';
echo 'Apellido: ' . $persona->apellido . '<br />';
echo 'Edad: ' . $persona->edad . '<br />';

echo $persona->saludar();

?>