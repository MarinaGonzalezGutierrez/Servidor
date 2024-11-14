<?php
    // Inicia la sesión para almacenar el valor del contador
    session_start();
    
    // Si no existe el contador, inicialízalo en 0
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador']=0;
    }

    // Logica de + y -
    if($_SERVER['REQUEST_METHOD'] === 'POST' ){
        if(isset ($_POST['sumar'])){
            $_SESSION['contador']++;
        }elseif(isset ($_POST['restar'])){
            $_SESSION['contador']--;
        }
    }

    // Obtiene el valor actual del contador
    $contador = $_SESSION['contador'];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrementar y decrementar</title>

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .contador-container{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 300px;
            text-align: center;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .boton{
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
        }
        .pantalla{
            font-size: 24px;
            padding: 0 20px;
        }

    </style>
</head>
<body>

    <div class="contador-container">
        <form action="#" method="POST">
            <input class="boton" type="submit" name="restar" value="-">
            <div class="pantalla"><?= $contador ?></div>
            <input class="boton" type="submit" name="sumar" value="+" >
        </form>
    </div>

</body>
</html>

