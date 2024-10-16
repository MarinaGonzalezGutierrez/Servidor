<!-- . Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE -->

<?php
//logica de la ecuacion de segundo grado
function resolverEcuacionSegundoGrado($a, $b, $c){
    $discriminante = ($b*$b) - (4 * $a* $c);

    if($discriminante < 0){
        return false;
    }elseif($discriminante == 0){
        $solucion = -$b / (2*$a);
        return array($solucion);
    }else{
$solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
$solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
return array($solucion1, $solucion2);

    }
}

//numeros a b y c y solucion
//mostrar numeros
$a = 1;
echo "a :".$a;
echo "<br>";
$b= -5;
echo "b :" .$b;
echo "<br>";
$c = 6;
echo "c :". $c;
echo "<br>";
$soluciones = resolverEcuacionSegundoGrado($a, $b, $c);

if($soluciones !== false){
    echo "La ecuacion tiene como solucion :";
    print_r($soluciones);
}else{
    echo "No tiene solucion";
}


?>