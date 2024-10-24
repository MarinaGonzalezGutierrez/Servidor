<?php
$valor = $_POST['opcion'];

switch($valor){
    case 1:
        echo "eres una personita";
        break;
    case 2:
        echo "todavía eres muy joven";
        break;
    case 3:
        echo "eres una persona joven";
        break;

    case 4:
        echo "eres una persona madura";
        break;

    case 5:
        echo "Ya eres una persona mayor";
        break;

    default:
    echo" Aún no me has dicho tu edad";
     break;

}








?>