
<?php
//Crear matriz 20x20 con valores aleatorios
$matriz = [];
$filas = 20;
$columnas = 20;

for($i=0; $i < $filas; $i++){
    for($j=0; $j < $columnas; $j++){
        $matriz[$i][$j] = rand(0,100);
    }
}
//Sumar columnas
$suma_columnas = array_fill(0,20,0); //Buscar documentacion de como funciona esta funcion

for($j=0; $j < $filas; $j++){
    for($i=0; $i < $columnas; $i++){
       $suma_columnas[$j] += $matriz[$i][$j];
    }
}

// Identificar la columna con la máxima suma
$columna_max = array_search(max($suma_columnas), $suma_columnas); //Buscar documentacion de como funciona esta funcion
$suma_max = $suma_columnas[$columna_max];

//imprimir la columna con la suma maxima y la suma
echo"La columna con la suma max es la columna $columna_max con una suma de $suma_max.\n";











?>