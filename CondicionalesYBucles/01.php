<?php
$num1 = 9;
$num2 = 7;



if($num1 == $num2){
$resultado = $num1 * $num2;
echo "Son iguales,  la multiplicacion es :".$resultado;

} elseif($num1 > $num2){
$resultado = $num1 - $num2;
echo "El num1 es mayor que el num2, la resta es :".$resultado;

} else{
$resultado = $num1+ $num2;
echo "El num1 es menor que el num2, la suma es :".$resultado;
}


?>