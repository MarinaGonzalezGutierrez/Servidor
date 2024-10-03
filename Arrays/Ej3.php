<!-- Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea. -->

<?php
for($i=0; $i<=10; $i++){
    if($i % 2 == 0){
    echo "Los primeros numeros pares son :";
    echo $i;
    echo "<br>";
    }
     
}

?>