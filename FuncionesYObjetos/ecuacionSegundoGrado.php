<!-- 1. Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE. -->

<?php
function ecuacion_Segundo_Grado($a, $b, $c, $discr, $solucion){
$a = 3;
$b = 2;
$c = 1;

$discriminante = ($b*$b) - (4 * $a* $c);

if($discriminante < 0){
    echo "La ecuación no tiene soluciones reales (discriminante negativo).";
    return $solucion = false;
}

elseif($discriminante  == 0){
// Una única solución: -b / 2a
$solucion = -$b / (2*$a);
echo "La ecuación tiene una única solución: $solucion";
$solucion = true;
}else{
    // Dos soluciones reales distintas
    $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
 $solucion = true;

}
}

?>