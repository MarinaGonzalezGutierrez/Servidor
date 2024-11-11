<!-- Hacer una caja que tenga de titulo CONTADOR y que tenga en 
 el medio una caja en el que se mostraran los numeros,
 que se pueden ir restando o sumando con dos botones de + y -. 
 Tambien que se cierre con un boton que se llame Cerrar.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja contador añadir o quitar</title>

    <style>
        .caja {
            width: 200px;
            height: 200px;
            border: 1px solid black;
            text-align: center;
            padding: 20px;
        }

        .numero {
            font-size: 48px;
            font-weight:bold;
        }

        .botones{
            margin-top: 20px;
        }

        </style>
</head>
<body>
    <form method="POST" action="">
        <input type="hidden" name="restar" value="restar">
        <button type="submit">-</button>
    </form>

    <form method="POST" action="">
        <input type="hidden" name="sumar" value="sumar">
        <button type="submit">+</button>
    </form>

    <form method="POST" action="">
    <input type="hidden" name="cerrar" value="cerrar">
    <button type="submit">Cerrar</button>    
    </form>
</body>
</html>