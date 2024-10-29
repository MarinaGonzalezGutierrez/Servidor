<?php
//vehiculo class php
//CLASE PADRE
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
    $this->peso += $peso_persona;
}

public function __toString() {
return 'Peso y Color: '. $this->peso .' '. $this->color ;
}

//CLASE HIJA: primero required de la madre fuera y luego extends despues añadido a la clase


public function getColor(){
return $this->color;
}


public function setColor($color){
$this->color = $color;
return $this;
}


public function getPeso(){
return $this->peso;
}

 
public function setPeso($peso){
$this->peso = $peso;
return $this;
}


}
?>