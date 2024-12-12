<?php
//siempre iniciamos sesion
    session_start();
    // if (isset($_POST['input'])) {
        
    //     if ($_POST['input'] == "INCREMENTAR" && $_SESSION['contador']<4) {
    //         $_SESSION['contador']++;
    //     } else if ($_SESSION['contador']>=4) {
    //         echo<<<_END
    //             <meta http-equiv="refresh" content="0;URL='agenda.php'" />
    //         _END;
    //     } else {
    //         echo<<<_END
    //             <meta http-equiv="refresh" content="0;URL='agenda.php'" />
    //         _END;
    //     }
    // } else {
    //     $_SESSION['contador'] = 0;
    // }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenido <?php echo  $_SESSION['usu'];?> !!</p>
    <h1>GEROGLÍFICO</h1>
    <!-- Aplicamos estilos de la tabla -->
    <div style="border: 4px double; width:40%;">
        <!-- para mostrar el nombre d usuario, con la variable de session almacenamos usuarios -->
        
       
    </div>
    <div>
       <img src= "img/20241212.jpg" />
    </div>
    <form method="post" action="#">
        <!-- Cajas de texto de incrementar y grabar -->
    <input type="submit" value="INCREMENTAR" name="input">
    <input type="submit" value="GRABAR" name="input">
    </form>
</body>
</html>