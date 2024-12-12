<!-- Calcular si un número entero generado de forma aleatoria entre 1 y 1000 es
perfecto. Un número perfecto es aquel que la suma de sus divisores es él mismo,
por ejemplo el 6, sus divisores son 1,2,3 la suma de los mismos es 6. -->

<?php
// Generar un número aleatorio entre 1 y 1000
$numero = rand(1, 1000);
echo "Número generado: $numero\n";

// Inicializar la variable para almacenar la suma de los divisores
$suma_divisores = 0;

// Encontrar los divisores del número (excluyendo el propio número)
for($i=1; $i < $numero; $i++){
    if($numero % $i ==0){
        $suma_divisores+=$i;
    }
}

//Comprobar si la suma de los divisores es igual al numero generado
if($suma_divisores === $numero || $numero===1){
    echo"<br/>$numero es un número perfecto \n";
}else{
    echo"<br/>$numero NO  es un número perfecto \n";
}
?>