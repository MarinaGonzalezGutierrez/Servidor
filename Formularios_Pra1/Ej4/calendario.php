<html lang="ES">
<head>
<title>GENERADOR CALENDARIO</title>
<style>
table{border-collapse: collapse;}
th{background-color: blue; color:white; padding: 5px;}
td{width: 30px; height: 30px; text-align: center; border:1px solid black;}

/* TR-> FILAS, TH-> CELDAS/COLUMNAS DE ENCABEZADO, TD-> CELDAS DE INFORMACION */
</style>
</head>

<body>
<form method="POST">
<label for="mes">Introduce un mes :</label>
<input type= "number" id="mes" name="mes" min="1" max="12" required>

<label for="anio">Introduce un año :</label>
<input type="number" id="anio" name="anio" min="1" required>

<button type="submit">Enviar :</button>
</form>

<?php
//SERVER: sirve para verificar si ha llegado correctamente el formulario al servidor
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];

    //obtener el primer dia del mes y nº de dias del mes
    $primer_dia = date("N", strtotime("$anio-$mes-01"));
    $dias_en_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio); //numero de dias en un mes

    //mostrar titulo
    echo "<h3> CALENDARIO $anio </h3";
    echo "<table>"; 
    echo "<tr>
    <th> L </th> <th> M </th> <th> X </th> <th> J </th> <th> V </th> <th> S </th> <th> D </th>
    </tr>";

    //iniciar la fila de la 1 semana 
    echo "<tr>";

    //agregar celdas vacias hasta 1 dia del mes
    for($i = 1; $i<$primer_dia; $i++){
echo "<td> </td>";
    }

    //rellenar dias del mes
    for($dia = 1; $dia<= $dias_en_mes; $dia++){
        echo "<td> $dia </td>";

        //si es domingo 
        if(($dia + $primer_dia-1) % 7 == 0){ //-1 porque al lunes si le restas 1 es domingo
            echo "</tr> <tr>"; //empieza desde el final de la semana (domingo) entonces por eso empezamos con el final de la etiqueta

        }
    }

    //completar ultima semana
    while(($dia + $primer_dia-1) % 7 !=0){
        echo "<td> </td>";
        $dia++;
    }

    echo "</tr>";
    echo "</table>";
}



?>
</body>
</html>