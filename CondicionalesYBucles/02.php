<?php
$num1 = 4;
$num2 = 7;
$num3 = 10;

if($num1 > $num2 && $num1 >  $num3){
     echo "El numero mayor es el :".$num1;
    
}elseif($num2 > $num1 && $num2 > $num3){
    echo "El numero mayor es el :".$num2;

    
}else {
    echo "El numero mayor es el :".$num3;
    
}
?>