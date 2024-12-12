<?php
    session_start();
    require_once('conexion.php');
    
    if(!isset($_SESSION['login'])){
        header("entrada.php");
        exit();
    }

    $cartas = $_SESSION['cartas'];
    $pos1 = (int)$_POST['pos1'];
    $pos2 = (int)$_POST['pos2'];
    $intentos = $_SESSION['levantadas'];

    if($cartas[$pos1-1] === $cartas[$pos2-1]){
        echo "Acierto posiciones $pos1 y $pos2 después de $intentos intentos.";
        $conn->query("UPDATE jugadores SET puntos = puntos + 1, extra = $intentos WHERE nombre = '" . $_SESSION['login'] . "'");
    } else {
        echo "Fallo posiciones $pos1 y $pos2 después de $intentos intentos.";
        $conn->query("UPDATE jugadores SET puntos = puntos - 1, extra = $intentos WHERE nombre = '" . $_SESSION['login'] . "'");
    }

$result = $conn->query("SELECT nombre, puntos, extra FROM jugadores");

    

?>


<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Puntos</th>
            <th>Extra</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                <td><?php echo $row['puntos']; ?></td>
                <td><?php echo $row['extra']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>