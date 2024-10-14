<!-- 11. Realizar un programa que muestre las películas que se han visto. Crear un array
que contenga los meses de enero, febrero, marzo y abril, asignando los valores
9,12,0 y 17 respectivamente. Si en alguno de los meses no se ha visto alguna
película no ha de mostrar la información de ese mes. -->

<?php
$peliculas = array('Enero' => "9",
'Febrero' => "12",
'Marzo' => "0",
'Abril' => "17"
);


foreach($peliculas as $mes => $numPeliculas){
    if($numPeliculas > 0){
        echo "En el mes de <b> $mes </b> se han visto $numPeliculas películas.\n";
    }
    echo '<br/>';
}



?>