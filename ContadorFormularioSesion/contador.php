<!--Hacer una caja que tenga de titulo CONTADOR y que tenga en 
 el medio una caja en el que se mostraran los numeros,
 que se pueden ir restando o sumando con dos botones de + y -. 
 Tambien que se cierre con un boton que se llame Cerrar.
--> 
<?php
session_start();
if(isset($POST['caja'])){
    
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero que se incrementa o se disminuye</title>
</head>
<body>  
    <form action="#" method="POST">
    <input type="hidden" name="restar" value="restar">
    <button type="submit">-</button>   

    <input type="hidden" name="caja" value = "caja">
    <button type="submit">   </button>
    
    <input type="hidden" name="sumar" value="sumar">
    <button type="submit">+</button>

    <input type="hidden" name="cerrar" value="cerrar">
    <br> 
    <br>
    <button type="submit">Cerrar</button>
    </form>
</body>
</html>

