<?php
 require_once 'login.php';

 $connection = new mysqli($hn, $un, $pw, $db, 3307); //puerto
 if ($connection->connect_error) die("Fatal Error");


 $consulta="INSERT INTO usuarios (Usu, Contra, Rol) VALUES ('Yolanda', 'yolanda123', 'jugador')";


 $result = $connection->query($consulta);
mysqli_close($connection);


?>