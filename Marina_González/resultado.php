<?php
session_start();

$fechaEstablecida = date('Y-m-d');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>

<h1>Fecha : <?php echo $fechaEstablecida ?> </h1>

<p><strong> Jugadores acertantes :</strong> </p>
<table border="1">
        <tr>
            <th>Login</th>
            <th>Hora </th>
        </tr>
        <tr>
                <td>Benja:<?php echo "<br>" .$fechaEstablecida?></td>
                
                <!-- <td>Miguel:</td>
                <td>Olga:</td> -->
            </tr>
</table>

<br>
<br>
<p><strong> Jugadores que han fallado:</strong> </p>
<table border="1">
        <tr>
            <th>Login</th>
            <th>Hora</th>
        </tr>
        <tr>
                <td>Benja: <?php echo "<br>" .$fechaEstablecida?></td>
                <!-- <td>Miguel:</td>
                <td>Olga:</td> -->
            </tr>
</table>
</body>
</html>