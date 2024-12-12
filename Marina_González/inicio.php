<?php
//siempre iniciamos sesion
    session_start();
    require_once("login.php");
    $fechaEstablecida = date('Y-m-d');
    $usu = $_SESSION['usu'];
    $connection = new mysqli($hn, $un, $pw, $db);
    if ($connection->connect_error) die("Fatal Error");
    // if(!isset($_SESSION['login'])){
    //     header("inicio.php");
        
    // }
$_SESSION['respuesta'] = [];
if(isset($_SESSION['solu'])){
    $_SESSION['solu'] = '';
    $solu = $_SESSION['solu'];
        $query = "INSERT INTO solucion (fecha, solucion) VALUES ($fechaEstablecida, $solu)";
}

   
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenido, <?php echo  $_SESSION['usu'];?> !!</p>
    <!-- Aplicamos estilos de la tabla -->
    <div>
       <img src= "img/20241212.jpg" width= "200" height="200" />
    </div>
    <form method="post" action="#">
       <!-- Boton enviar -->
        <br>
    <label for="solu">Solucion al jeroglifico :</label>
    <input type="text" id="solu" name="solu" required>
    <br>
    <input type="submit" value="Enviar" name="input">
    <br>
    <br>
    <a href="resultado.php">Ver puntos por jugador</a><br>
    <a href="puntos.php">Resultados del dia</a><br>
    </form>
</body>
</html>