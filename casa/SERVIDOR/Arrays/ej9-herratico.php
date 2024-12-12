<?php
// Crear una matriz de 20x20 con valores aleatorios entre 0 y 100
$matriz = [];
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $matriz[$i][$j] = rand(0, 100);
    }
}

// Inicializar un array para las sumas de las columnas
$suma_columnas = [];
for ($j = 0; $j < 20; $j++) {
    $suma_columnas[$j] = 0;  // Inicializamos cada posición en 0
}

// Sumar las columnas
for ($j = 0; $j < 20; $j++) {
    for ($i = 0; $i < 20; $i++) {
        $suma_columnas[$j] += $matriz[$i][$j];
    }
}

// Encontrar la columna con la suma máxima sin usar array_search
$columna_maxima = 0;
$suma_maxima = $suma_columnas[0];

for ($j = 1; $j < 20; $j++) {
    if ($suma_columnas[$j] > $suma_maxima) {
        $suma_maxima = $suma_columnas[$j];
        $columna_maxima = $j;
    }
}

// Imprimir la columna con la suma máxima y la suma
echo "La columna con la suma máxima es la columna $columna_maxima con una suma de $suma_maxima.\n";
?>
