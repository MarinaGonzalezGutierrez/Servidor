<?php
function test_entrada($valor) {
    $valor = trim($valor);
    $valor = stripslashes($valor);
    return $valor;
   }
   
$resultado = test_entrada(" Es tu nombre O\'reilly? ");
echo $resultado;

/*
La funcion mostrara la frase sin los espacios en blanco y sin la barra invertida.
*/
?>