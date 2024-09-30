<!-- Dados 3 números asignados dentro del código a mostrar el número mayor de los
tres. -->

<?php
$num1 = 4;
$num2 = 7;
$num3 = 2;

if($num1 > $num2){
    if($num1 >  $num3){
        echo "El numero mayor es el :".$num1;
    }
}else if($num2 > $num1){
    if($num2 > $num3){
        echo "El numero mayor es el :".$num2;
    }
    
}else if($num3 > $num2){
    if($num3 > $num1){
        echo "El numero mayor es el :".$num3;
    }
}
?>