<!-- Escriba un programa a partir de un número entero generado de forma aleatoria
indique si es primo. Un número primo es aquel que es divisible por el mismo y la
unidad. -->


<?php
// Generar un número aleatorio entre 1 y 50
$numero = rand(1, 50);
echo "Número generado: $numero\n <br/>";

// Inicializamos la variable para determinar si es primo
$esPrimo = true;

if ($numero < 2) {
    $esPrimo = false; // Los números menores que 2 no son primos
} else {
    // Verificamos si tiene divisores desde 2 hasta $numero - 1
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false; // Si encontramos un divisor, no es primo
            break; // No es necesario seguir buscando más divisores
        }
    }
}

// Resultado
if ($esPrimo) {
    echo "$numero es un número primo.\n";
} else {
    echo "$numero no es un número primo.\n";
}
?>