<!-- 4. Escribe una función que reciba un array de números, y un número, el límite. La
función tiene que devolver un nuevo array que contenga solo los elementos del
array original menores que el límite. -->

<?php

//logica
function filtrarMenores($array, $limite) {
    $nuevoArray = array();
    foreach ($array as $numero) {
        if ($numero < $limite) {
            $nuevoArray[] = $numero;
        }
    }
    return $nuevoArray;
}

//array de numeros
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$limite = 5;
$nuevoArray = filtrarMenores($array, $limite);
print_r($nuevoArray);



?>