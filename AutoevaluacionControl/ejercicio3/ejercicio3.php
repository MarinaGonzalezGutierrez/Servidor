<?php
//ABRIMOS SESION
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION["miNumero"]=rand(1,100);
    
    if(isset ($_POST['numero'])){
        if($_SESSION["miNumero"] === $_POST['numero']){
            echo "Tu numero es : $numero";
            echo "ENHORABUENA HAS ACERTADO";
           
        }
    }
   
    
   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del numero secreto:</title>
</head>
<body>
    <form action="#" method="POST">
    <!-- Caja para introducir el numero -->
    <label for="numero">Adivina mi numero : </label>
    <input type="text" id="numero" name ="numero" required min="1"><br><br>
    <!-- Boton para enviar -->
    <input type="submit" value="Enviar">
    </form>

</body>
</html>