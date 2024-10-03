<!-- Determinar la cantidad de dinero que recibirá un trabajador por concepto de las
horas extras trabajadas en una empresa, sabiendo que cuando las horas de
trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al
doble de una hora normal cuando no exceden de 8; si las horas extras exceden de
8 se pagan las primeras 8 al doble de lo que se pagan las horas normales y el resto
al triple. -->

<?php
$horas_trabajadas = 50; 
$pago_por_hora = 10;

$pago_total = 0;

if($horas_trabajadas > 40){
   
    $horas_extras = $horas_trabajadas-40;
    $horas_normales = 40;

    // Si las horas extras son menores o iguales a 8
    if($horas_extras <= 8){
        $pago_total = ($horas_normales*$pago_por_hora)+($horas_extras*$pago_por_hora*2);
    }else{ 
        $horas_extras_dobles = 8;
        $horas_extras_triples = $horas_extras- $horas_extras_dobles;
 
        // Pago por horas normales + primeras 8 horas extras al doble + el resto al triple
        $pago_total = ($horas_normales*$pago_por_hora) +
                      ($horas_extras_dobles* $pago_por_hora * 2) +
                      ($horas_extras_triples* $pago_por_hora * 3);
    }


}else{

    $pago_total = $horas_trabajadas * $pago_por_hora;

}

echo "El pago total por las horas trabajadas es: €" . $pago_total;

?>




