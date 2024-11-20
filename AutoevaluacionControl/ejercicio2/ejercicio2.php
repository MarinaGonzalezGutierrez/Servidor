<?php
session_start();
$_SESSION["resul"] = 0;
$bin = [rand(0,1),rand(0,1),rand(0,1),rand(0,1)];
$potencias = [8,4,2,1];
 
for ($i=0; $i<4; $i++) {
    if($bin[$i] == 1)  {
        $_SESSION["resul"] = $_SESSION["resul"] + $potencias[$i];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Adivina el numero decimal</h1>
<h2>El numero en BINARIO: <?php foreach($bin as $num){echo $num;}?></h2>
<?php
        // if($bin[0] == 1) {
        //     echo "<img src='img/ocho.jpg'>";
        // } else {
        //     echo "<img src='img/blanco.jpg'>";
        // }
 
        // if($bin[1] == 1) {
        //     echo "<img src='img/cuatro.jpg'>";
        // } else {
        //     echo "<img src='img/blanco.jpg'>";
        // }
 
        // if($bin[2] == 1) {
        //     echo "<img src='img/dos.jpg'>";
        // } else {
        //     echo "<img src='img/blanco.jpg'>";
        // }
 
        // if($bin[3] == 1) {
        //     echo "<img src='img/uno.jpg'>";
        // } else {
        //     echo "<img src='img/blanco.jpg'>";
        // }

        for ($i=4; $i >= 0; $i--) { 
            $potencias[$i]=2**$i;
        }
       
        for ($i=3; $i >= 0; $i--) { 
            if($num[$i]==1){
                    switch ($potencias[$i]) {
                        case 1:
                            echo '<img src="Uno.jpg">';
                            break;
                            case 2:
                                echo '<img src="dos.jpg">';
                                break;
                                case 4:
                                    echo '<img src="cuatro.jpg">';
                                    break;
                                    case 8:
                                        echo '<img src="ocho.jpg">';
                                        break;
                    }
            }else{
                echo '<img src="blanco.jpg">';
            }
        }
 
    ?>
<br><br>
<form action="ejercicio21.php" method="post">
<label for="resp">Número decimal</label>
<input type="number" name="resp" required>
<input type='submit' value='Enviar'>
</form>
</body>
</html>