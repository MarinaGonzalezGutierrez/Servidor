<!-- 5. Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna. -->

<?php
// Generar la matriz de 3x5 con valores aleatorios
$filas = 3;
$columnas = 5;
$matriz = [];

// Llenar la matriz con valores aleatorios entre 1 y 100
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}
// a. Imprimir todos los elementos tomándolos por fila
echo "Elementos por fila: <br/>";
for ($i=0; $i < $filas; $i++) { 
    for($j=0; $j< $columnas; $j++){
        echo $matriz[$i][$j]. " ";
    }
    echo "<br/>";
}


// b. Imprimir todos los elementos tomándolos por columna
echo "Elementos por Columnas: <br/>";
for ($j=0; $j < $columnas; $j++) { 
    for($i=0; $i < $filas; $i++){
        echo $matriz[$i][$j]. " ";
    }
    echo "<br/>";
}

?>