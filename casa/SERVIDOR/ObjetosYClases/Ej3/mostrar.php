<?php
// Incluye las clases
include 'garaje.php';

// 5-Crear un coche verde de 1400 kg y añadir dos personas de 65 kg cada una
$coche = new Coche("Verde", 1400, 4, 0);
$coche->añadir_persona(65); //1 Persona
$coche->añadir_persona(65); //2 Persona

// Mostrar el color y el nuevo peso
echo "Coche verde después de añadir dos personas:<br>";
echo "Color: " . $coche->get_color() . "<br>";
echo "Peso: " . $coche->get_peso() . " kg<br><br>";

//6- Repintar el coche en rojo y añadir dos cadenas para la nieve
$coche->repintar("Rojo");
$coche->añadir_cadenas_nieve(2);


//7-Mostrar el color y el número de cadenas para la nieve
echo "Coche repintado en rojo con cadenas para la nieve:<br>";
echo "Color: " . $coche->get_color() . "<br>";
echo "Número de cadenas para la nieve: " . $coche->getNumeroCadenasNieve() . "<br><br>";

//8- Crear un objeto Dos_ruedas negro de 120 kg, añadir una persona y poner gasolina
$dos_ruedas = new Dos_ruedas("Negro", 120, 125);
$dos_ruedas->añadir_persona(80);
$dos_ruedas->poner_gasolina(20);

//9- Mostrar el color y el peso de Dos_ruedas
echo "Dos ruedas después de añadir persona y gasolina:<br>";
echo "Color: " . $dos_ruedas->get_color() . "<br>";
echo "Peso: " . $dos_ruedas->get_peso() . " kg<br><br>";

// 10. Crear un camión azul de 10000 kg y 10 metros de longitud con 2 puertas
$camion = new Camion("Azul", 10000, 2, 10);
//Añadir un remolque de 5 metros y una persona de 80 kg
$camion->añadir_persona(80);
$camion->añadir_remolque(5);

//11-Mostrar su color, peso, longitud y número de puertas
echo "Camión azul después de añadir remolque y persona:<br>";
echo "Color: " . $camion->get_color() . "<br>";
echo "Peso: " . $camion->get_peso() . " kg<br>";
echo "Longitud: " . $camion->get_longitud() . " metros<br>";
echo "Número de puertas: " . $camion->getNumeroPuertas() . "<br>";

?>