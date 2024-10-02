<!-- Dados 2 números asignados dentro del código a variables realizar el siguiente
cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
que los reste y si no que los sume. Mostrar el resultado en pantalla. -->

<?php
$num1 = 9;
$num2 = 7;
$mult = 0;
$restar = 0;
$sum = 0;

if($num1 == $num2){
$mult = $num1 * $num2;
echo "Son iguales,  la multiplicacion es :".$mult;
}else if($num1 > $num2){
$restar = $num1 - $num2;
echo "El num1 es mayor que el num2, la resta es :".$restar;
}else if($num1 < $num2){
$sum = $num1+ $num2;
echo "El num1 es menor que el num2, la suma es :".$sum;
}


?>