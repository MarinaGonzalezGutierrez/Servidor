<?php
    session_start();
    require_once "pintar-circulos.php";
    
    // var_dump($_SESSION);echo '<br>';
    // var_dump($_POST);
    if (isset($_POST['dato'])) {
        if($_SESSION['pulsaciones'] == 0){
            $_SESSION["color1"] = $_POST['dato']; 
            $_SESSION['pulsaciones']++;
            pintar_circulos($_SESSION["color1"],$_SESSION["color2"],$_SESSION["color3"],$_SESSION["color4"]);
        }
        elseif($_SESSION['pulsaciones'] == 1){
            $_SESSION["color2"] = $_POST['dato']; 
            $_SESSION['pulsaciones']++;
            pintar_circulos($_SESSION["color1"],$_SESSION["color2"],$_SESSION["color3"],$_SESSION["color4"]);
        }
       elseif($_SESSION['pulsaciones'] == 2){
            $_SESSION["color3"] = $_POST['dato']; 
            $_SESSION['pulsaciones']++;
            pintar_circulos($_SESSION["color1"],$_SESSION["color2"],$_SESSION["color3"],$_SESSION["color4"]);
        }
        elseif($_SESSION['pulsaciones'] == 3){
            $_SESSION["color4"] = $_POST['dato']; 
            pintar_circulos($_SESSION["color1"],$_SESSION["color2"],$_SESSION["color3"],$_SESSION["color4"]);
            session_destroy();
            header('Location: calculo.php');
            
        }      
      }   
      else {
        $_SESSION["color1"]= 'black';
        $_SESSION["color2"]= 'black';
        $_SESSION["color3"]= 'black';
        $_SESSION["color4"]= 'black';
         pintar_circulos('black','black','black','black');
   
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
    <div class="circulos">
      
    </div>
    
    <form action="#" method="post">
        <input type="submit" value="red" name="dato">
        <input type="submit" value="green" name="dato">
        <input type="submit" value="blue" name="dato">
        <input type="submit" value="yellow" name="dato">
    </form>
    
    
</body>
</html>