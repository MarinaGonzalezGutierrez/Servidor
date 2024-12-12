<?php

    //Iniciar Sesion
    session_start();

    //Comprobar si ya existen los colores generados en la sesión
    if(!isset($_SESSION['colores'])){
        //Definir los colores posibles
        $colores = ['red', 'blue', 'yellow', 'green'];
                        
        // Generar colores aleatorios para los 4 circulos
        $colores_generados=[];
        for($i=0; $i< 4; $i++){
            $colores_generados[] = $colores[array_rand($colores)]; // Elegir un color aleatorio
        
        }
        
        //Guardar en la sesion
        $_SESSION['colores'] = $colores_generados;
    }

    //Nombre del usuario logueado (Esto deberia ser remplazado por la lógica real), 
    $user = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario Logueado' // Si ya existe un nombre, se usa; si no, se muestra el predeterminado

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>
    <style>
        .circulo{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid black;
            margin: 10px;
            display: inline-block;
        }
        .boton {
            border: none; 
            color: black; 
            padding: 14px 28px; 
            cursor: pointer; 
            border-radius: 5px;
            background-color: white; 
            border: 2px solid #007bff;
        }
    </style>
</head>    
<body>
    <h1> SIMON </h1>
    <h2> Hola, <?php echo $user;?>, memorice la combinación </h2>

    <?php
        // Incluir el archivo que contiene la funcion pintar_curculos()
        include 'pintar-circulo.php';

        // Llamar a la funcion para pintar los circulos
        pintar_circulos($_SESSION['colores'][0],$_SESSION['colores'][1],$_SESSION['colores'][2],$_SESSION['colores'][3]);
    ?>

    <form action="jugar.php" method="get">
        <button class="boton" type="submit">Vamos a Jugar</button>
    </form>

     </div>
    

    <!--OPCIONAL-->
    <button class="boton" onclick="reiniciarJuego()">Reiniciar Juego</button>

    <script>
    function reiniciarJuego() {
        // Limpiar la sesión del navegador
        <?php
        // Reseteamos la sesión en PHP
        session_start();
        $_SESSION['jugada'] = [];
        ?>

        // Restablecer los círculos a su estado inicial (negro)
        let circulos = document.querySelectorAll('.circulo');
        circulos.forEach(circulo => {
            circulo.style.backgroundColor = 'black';
        });

        // Reiniciar otras variables si es necesario (como un contador de pasos)
        alert("El juego ha sido reiniciado.");
    }
    </script>
</body>

</html>

