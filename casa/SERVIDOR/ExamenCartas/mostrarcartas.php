<?php
session_start();
require_once("conexion.php");

if(!isset($_SESSION['login'])){
    header("entrada.php");
    exit();
}

//Inicialización de variables
if(!isset($_SESSION['cartas'])){
    $cartas = [2,2,3,3,5,5];
    shuffle($cartas);
    $_SESSION['cartas'] = $cartas;
    $_SESSION['levantadas'] = 0; //al principio estan todas en negro
}

$cartas = $_SESSION['cartas'];
$_SESSION['levantadas'] = $_SESSION['levantadas'] ?? 0;

//para validar que llega el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $posicion = (int)$_POST['carta'];
    $_SESSION['levantadas']++;
    $cartasMostradas = $cartas[$posicion-1];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de cartas</title>
</head>
<body>
    <h1>Bienvenid@ , <?php echo htmlspecialchars($_SESSION['login']);  ?></h1>
    <p>Cartas levantadas : <?php echo $_SESSION['levantadas']; ?></p>

    <form action="">
        <?php for($i = 1; $i<=6; $i++):?> 
            <button type="submit" name="carta" value="<?php echo $i ?>">Levantar carta <?php echo $i ?></button>
        <?php endfor;?>
    </form>

    <p>Pareja:</p>
    <form method="POST" action="resultados.php">
        <input type="text" name="pos1" min="1" max="6" requiered>
        <input type="text" name="pos2" min="1" max="6" requiered>
        <button type="submit">Comprobar</button>
    </form>
</body>
</html>