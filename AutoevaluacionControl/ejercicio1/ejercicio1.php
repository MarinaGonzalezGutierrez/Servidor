<?php

//primero ver si existe el metodo post
if($_SERVER["REQUEST_METHOD"] == "POST"){
$binarios = [];

//recorrer con for, dos 
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $valor = $_POST["E$i.$j"];

        if (is_numeric($valor) && $valor >= 1 && $valor <= 100) {
            $binarios["E$i.$j"] = decbin($valor);
        } else {
            $binarios["E$i.$j"] = "Valor no válido";
        }
    }
}

// echo "<h2>Resultados en Binario:</h2>";
//     echo "<table border='1'>";
//     for ($i = 0; $i < 2; $i++) {
//         echo "<tr>";
//         for ($j = 0; $j < 3; $j++) {
//             echo "<td>" . $binarios["E$i.$j"] . "</td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table><br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convierte a binario :</title>
</head>
<body>
    <!-- Formulario para meter los valores en la matriz 2x3 -->
     <form action="#" method="POST">
        <!-- Tabla para crear las distntas filas y columnas -->
     <table> 
        <tr>
            <!-- input pa los botones -->
            <td>E.0.0 <input type="text" name="E0.0" value=""></td>
            <td>E.0.1 <input type="text" name="E0.1" value=""></td>
            <td>E.2.0 <input type="text" name="E0.2" value=""></td>
            
        </tr>
        <tr>
            <td>E.1.0 <input type="text" name="E1.0" value=""></td>
            <td>E.1.1 <input type="text" name="E1.1" value=""></td>
            <td>E.2.1 <input type="text" name="E1.2" value=""></td>
            <br>
        </tr>
    </table>
    <br>
    <!-- Boton para calcular -->
    <input type="submit" value="Calcular">

    </form>
</body>
</html>