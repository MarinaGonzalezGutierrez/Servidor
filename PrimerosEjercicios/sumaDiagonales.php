<?php
//4x4
$M = array(array(15, 10, 25, 8),
 array(3, 2, 1, 7),
 array(19, 25, 10, 8),
 array(9, 15, 25, 13));

 //La suma de la diagonal primera es 40
 //La suma de la diagona segunda 43

 $primeraDiagonal = 0;
 $segundaDiagonal = 0;

 for($i = 0; $i<=3; $i++){

    $primeraDiagonal += $M[$i][$i];
 }

 for($j=0; $j<=3; $j++){
    $segundaDiagonal += $M[$j][3-$j];

 }

 echo "La suma de la primera diagonal es :".$primeraDiagonal;
 echo "<br>";
 echo "La suma de la segunda diagonal es :".$segundaDiagonal;

?>