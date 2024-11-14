<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Adivinar numero</title>
</head>
<body>

<?php
//INICIO LA SESION
session_start(); 

//comprobar si el numero que estas introduciendo y subiendo en POST existe y llega
if (!isset($_SESSION['miNumero'])) { 
    $_SESSION["miNumero"] = rand(1, 100); //valores aleatorios

    $_SESSION['intentos'] = 0; //inicializar los intentos en 0

}
//vemos si el metodo existe y lo coge bien
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //vemos si existe el numero introducido
    if(isset($_POST['numIntroducir'])) {
        $numIntroducir = $_POST['numIntroducir'];

        //vamos evaluando los numeros
        if ($numIntroducir < $_SESSION['miNumero']) {
            echo "El numero es mayor <br>";
            $_SESSION['intentos']++;
        } elseif ($numIntroducir> $_SESSION['miNumero']) {
            echo "El numero es menor <br>";
            $_SESSION['intentos']++;
        } else {
            echo "Enhorabuena, has acertado el numero en " . $_SESSION['intentos'] . " intentos";
            session_destroy(); 
        }
    }
}
?>

<label>Adivina mi numero:</label>
<!-- Hacemos la caja para meter el numero -->
<form method="POST" action="#"> 
    <input type="text" name="numIntroducir">
    <input type="submit" value="Enviar">
</form>
</body>
</html>