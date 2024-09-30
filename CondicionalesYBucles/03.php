<?php
//Asignar valores a variables
$horas_trabajadas = 50; 
$pago_por_hora = 10;

// Inicializar la variable del pago total
$pago_total = 0;

if($horas_trabajadas > 40){
    // Calcular horas extras
    $horas_extras = $horas_trabajadas-40;
    $horas_normales = 40;

    // Si las horas extras son menores o iguales a 8
    if($horas_extras <= 8){
        // Pago por horas normales + pago por horas extras (al doble)
        $pago_total = ($horas_normales*$pago_por_hora)+($horas_extras*$pago_por_hora*2);
    }else{ 
        // Si las horas extras exceden de 8
        $horas_extras_dobles = 8;
        $horas_extras_triples = $horas_extras- $horas_extras_dobles;
 
        // Pago por horas normales + primeras 8 horas extras al doble + el resto al triple
        $pago_total = ($horas_normales*$pago_por_hora) +
                      ($horas_extras_dobles* $pago_por_hora * 2) +
                      ($horas_extras_triples* $pago_por_hora * 3);
    }


}else{
    // Si no hay horas extras, solo paga las horas trabajadas normalmente
    $pago_total = $horas_trabajadas * $pago_por_hora;

}

// Mostrar el resultado del pago total
echo "El pago total por las horas trabajadas es: €" . $pago_total;

?>