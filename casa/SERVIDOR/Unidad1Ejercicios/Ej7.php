<!-- Hacer un programa que calcule todos los números primos entre 1 y 50 y los
muestre por pantalla. Un número primo es un número entero que sólo es
divisible por 1 y por sí mismo. -->

<?php

for($i=2; $i<=50; $i++){
    $esPrimo = true; // Suponemos que el número es primo

    // Verificamos si el número tiene algún divisor (excluyendo 1 y el mismo número)
    for($j = 2; $j<$i; $j++){
        if($i % $j == 0){
            $esPrimo = false; // Si encontramos un divisor, no es primo
            break;  // No es necesario seguir buscando más divisores
        }
    }

    if($esPrimo){
        echo $i." "; // Imprimimos el número si es primo
    }

}


?>