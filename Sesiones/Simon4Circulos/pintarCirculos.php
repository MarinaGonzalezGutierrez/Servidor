<?php


function pintar_circulos($col1,$col2,$col3,$col4){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>    
<style>
        .circulo {
            width: 100px;       
            height: 100px;      
            background-color: <?php echo $col1;?>; 
            border-radius: 50%; 
            display: inline-block;
            align-items: space-between;
        }

        .circulo {
            width: 100px;       
            height: 100px;      
            background-color: <?php echo $col2;?>; 
            border-radius: 50%; 
            display: inline-block;
            align-items: space-between;
        }

        .circulo {
            width: 100px;       
            height: 100px;      
            background-color: <?php echo $col3;?>; 
            border-radius: 50%; 
            display: inline-block;
            align-items: space-between;
        }

        .circulo {
            width: 100px;       
            height: 100px;      
            background-color: <?php echo $col4;?>; 
            border-radius: 50%; 
            display: inline-block;
            align-items: space-between;
        }

    </style>
<?php
}
  ?>