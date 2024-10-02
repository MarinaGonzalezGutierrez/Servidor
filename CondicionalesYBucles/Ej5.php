<!-- Crear un programa partir de 3 valores, a b y c que corresponden a los tres
coeficientes de una ecuación de segundo grado muestre las soluciones de la
misma La solución de la ecuación de segundo grado depende del signo de b2-4ac:
 si b2-4ac es negativo no hay soluciones
 si es nulo, hay sólo una solución -b/2a
 si es positivo, hay dos soluciones: (-b+sqrt(b2-4ac))/(2a) y (-bsqrt(
b2-4ac))/(2a) -->

<?php
$a = 5;
$b = 9;
$c = 2;

$discriminante = ($b*$b) - (4 * $a* $c);

// Verificar el valor del discriminante y calcular las soluciones
if($discriminante < 0){
    echo "La ecuación no tiene soluciones reales (discriminante negativo).";
}

elseif($discriminante  == 0){
// Una única solución: -b / 2a
$solucion = -$b / (2*$a);
echo "La ecuación tiene una única solución: $solucion";

}else{
    // Dos soluciones reales distintas
    $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);


    echo "La ecuación tiene dos soluciones: <br>";
    echo "Solución 1: $solucion1 <br>";
    echo "Solución 2: $solucion2";

}

?>