<?php
    //iniciamos sesion
    session_start();

    require_once 'login.php';
    if (isset($_POST['usu'])) {
        $usu = $_POST['usu'];
        $psw = $_POST['psw'];
        $connection = new mysqli($hn, $un, $pw, $db);
        if ($connection->connect_error) die("Fatal Error");
        $query = "SELECT nombre FROM jugador WHERE login = '$usu' AND clave = '$psw' ";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");
        $rows = $result->num_rows;
        if ($rows!=0) {
            //guardamos los usuarios en una variable de sesion
            $_SESSION['usu'] = $_POST['usu'];
            $result->data_seek(0);
            // $_SESSION['cod'] = htmlspecialchars($result->fetch_assoc()['Codigo']);
            echo "LOGUEADO CORRECTAMENTE";
            $connection->close();
            echo<<<_END
                <meta http-equiv="refresh" content="0;URL='inicio.php'" />
            _END;
        } else {
            session_destroy();
            //pa q te vuelva a pedir el usuario y la contraseña
            
            echo "<a href='index.php'>Credenciales incorrectas. Intentalo de nuevo.</a>";
        }
    
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerogrifico</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <form action="#" method="post" >
        <!-- cajitas para rellenar -->
        <label for="usu">Usuario:</label>
        <input type="text" id="usu" name="usu" required>

        <label for="psw">Contraseña:</label>
        <input type="password" id="psw" name="psw" required>
<br> 
        <input type="submit" value="Entrar">
        
    </form>
</body>
</html>