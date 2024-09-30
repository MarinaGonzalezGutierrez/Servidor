<?php
for($i= 0; $i<=1; $i++){
    for($j=0; $j<=2; $j++){
        $M [$i] [$j] = 1;
    }
}
echo $M[1][2]; //mostrar solamente una posicion
echo "<br>"; //para que no aparezca el uno delante del array, salto de línea
var_dump($M);
//var_dump: mostrar toda la matriz
?>