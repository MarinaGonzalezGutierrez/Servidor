<?php
$operaciones = $_POST['operacion'];
$a = $_POST['a'];
$b = $_POST['b'];
switch($operaciones){
    case 1:
        $suma = 0;
        $suma = $a + $b;
        echo "$a + $b es $suma";
    break;

    case 2:
        $resta = 0;
        $resta = $a - $b;
        echo "$a - $b es $resta";
    break;

    case 3:
        $multi = 0;
        $multi = $a * $b;
        echo "$a x $b es $multi";
        break;

    case 4:
        $div = 0;
        $div = $a / $b;
        echo "$a / $b es $div";
        break;



}


?>