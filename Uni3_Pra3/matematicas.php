<?php
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

?>