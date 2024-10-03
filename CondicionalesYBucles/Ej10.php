<?php
echo "Pares de números con dígitos del 1 al 9:\n";

// Recorrer todos los dígitos del 1 al 9 para el primer número
for ($i = 1; $i <= 9; $i++) {
    // Recorrer todos los dígitos del 1 al 9 para el segundo número
    for ($j = 1; $j <= 9; $j++) {
        // Asegurarse de que los números del par sean distintos
        if ($i != $j) {
            echo "($i, $j)\n"; // Imprimir el par
        }
    }
}
?>