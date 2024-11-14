<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivinar numero</title>
</head>
<body>

<?php
session_start(); //Esta línea inicia la sesión en PHP

if (!isset($_SESSION['miNumero'])) { //Aquí se verifica si existe la variable de sesión
    $_SESSION["miNumero"] = rand(1, 100); 
    $_SESSION['intentos'] = 0;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['numIntroducir'])) {
        $numIntroducir = $_POST['numIntroducir'];

        if ($numIntroducir < $_SESSION['miNumero']) {
            echo "El numero es mayor <br>";
            $_SESSION['intentos']++;
        } elseif ($numIntroducir> $_SESSION['miNumero']) {
            echo "El numero es menor <br>";
            $_SESSION['intentos']++;
        } else {
            echo "Enhorabuena, has acertado el numero en " . $_SESSION['intentos'] . " intentos";
            session_destroy(); // Cierra la sesión
        }
    }
}
?>

<label>Adivina mi numero:</label>
<form method="POST" action="#"> 
    <input type="text" name="numIntroducir">
    <input type="submit" value="Enviar">
</form>
</body>
</html>