<?php
// Iniciar sesión
session_start();

// Verificar si ya existen los colores generados en la sesión
if (!isset($_SESSION['colores'])) {
    // Si no existen los colores, redirigir a inicio.php
    header("Location: inicio.php");
    exit;
}

// Si la jugada del usuario aún no ha sido inicializada, la creamos como un array vacío
if (!isset($_SESSION['jugada'])) {
    $_SESSION['jugada'] = [];
}

// Si el parámetro 'color' está presente en la URL, agregar ese color a la jugada
if (isset($_GET['color']) && count($_SESSION['jugada']) < 4) {
    $_SESSION['jugada'][] = $_GET['color'];
}

// Nombre del usuario logueado
$user = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario Logueado'; // Si ya existe un nombre, se usa; si no, se muestra el predeterminado

$colores = ['red', 'blue', 'yellow', 'green']; // Colores disponibles para los botones
$pintar_colores = ['black', 'black', 'black', 'black']; // Colores de los círculos (inicialmente en negro)

// Si ya hay colores en la jugada, asignar esos colores a los círculos
foreach ($_SESSION['jugada'] as $index => $color) {
    $pintar_colores[$index] = $color;
}

// Si ya se han pintado los 4 círculos, mostramos un mensaje de fin de juego
$finJuego = count($_SESSION['jugada']) == 4 ? true : false;
if ($finJuego) {
    echo "<script>alert('Fin del juego');</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>

    <style>
        .circulo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 10px;
            display: inline-block;
            border: 3px solid black;
        }
        .boton {
            border: none;
            color: black;
            padding: 14px 28px;
            cursor: pointer;
            border-radius: 5px;
            background-color: white;
            border: 2px solid black;
            margin: 10px;
        }
    </style>

</head>
<body>
    <h1>¡Simon Dice!</h1>
    <h2><?php echo $user;?>, pulsa los botones en el orden correspondiente.</h2>

    <?php
    // Incluir el archivo que contiene la función pintar_circulos()
    include 'pintar-circulo.php';
    // Pintar los círculos, usando los colores actuales de la jugada (inicialmente negros)
    pintar_circulos($pintar_colores[0], $pintar_colores[1], $pintar_colores[2], $pintar_colores[3]);
    ?>

    <!-- Botones de colores -->
    <div>
        <?php
        // Mostrar los botones con los colores correspondientes
        foreach ($colores as $color) {
            // Asignamos el color de fondo a cada botón según el array de colores
            echo "<a href='jugar.php?color=$color'><button class='boton' style='background-color: $color;'>$color</button></a>";
        }
        if ($finJuego) {
            echo "<script>
                    alert('Fin del juego');
                    window.location.href = 'inicio.php';  // Redirige a la página de inicio
                  </script>";
        }
        ?>
   

    
</body>
</html>
