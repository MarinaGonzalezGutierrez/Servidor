<?php
//vehiculo class php
class Vehiculo{
private $color;
private $peso;

public function __construct($color, $peso) {
$this->color = $color;
$this->peso = $peso;
}



public function circula(){
    echo "El vehiculo circula.<br />";
}

public function añadir_persona($peso_persona){
$this -> peso = $this -> peso + $peso_persona;
}

public function __toString() {
return 'Color: ' . $this->color . ' Peso: ' . $this->peso;
}



}
?>