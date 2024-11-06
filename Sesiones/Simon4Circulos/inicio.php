<?php
 $nColor = rand(0,3);

 switch ($nColor) {
    case 0:
        $color = "red";
    break;
    case 1:
        $color = "yellow";
    break;
    case 2:
        $color = "blue";
    break;
    case 3:
        $color = "green";
    break;
    }
//Para los colores del circulo que sean aleatorios
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Simon Examen 2023: Con 4 circulos</title>

    

</head>
<body>
    <h1> SIMON </h1>
    <h1> Hola Paco, memoriza la combinacion </h1>

    <div class = "circulo">
    </div>
 
    <div class = "circulo">
    </div>

    <div class = "circulo">
    </div>

    <div class = "circulo">
    </div>

    <form action="pregunta.php" method="post">
        <input type="hidden" name="color" value="<?php echo $color;?>">
        <br>
        <input type="submit" value="Jugar" name="submit">
    </form>
</body>
</html>

<?php




?>