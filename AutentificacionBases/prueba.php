<?php
$usu = 'pepito';
$contra = '123';



if($usu == $_POST['usuario'] && $contra == $_POST['contrasena']){
    echo "Bienvenidoo!!";

}else{
    echo "Acceso denegado!!";
}

// if($_POST[''])

?>