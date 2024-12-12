<?php
// Incluye las clases
include 'garaje.php';

//Crear un vehículo negro de 1500Kg
$vehiculo = new Vehiculo("Negro", 1500);

// Mostrar información sobre el vehículo
echo $vehiculo;

// Hacer que circule
$vehiculo->circula();

//Añadir una persona de 70Kg
$vehiculo->añadir_persona(70);

// Mostrar el nuevo peso del vehículo
echo "Después de añadir una persona de 70 kg:<br>";
echo $vehiculo;


?>