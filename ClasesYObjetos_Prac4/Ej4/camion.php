<?php
require_once ("cuatro_ruedas.php");
class Camion extends Cuatro_ruedas{
private $longitud;

public function __construct($color, $peso, $longitud, $num_puertas) {
    parent::__construct($color, $peso, $num_puertas);
    $this->longitud = $longitud;
    }

/**
 * GET: LONGITUD
 */ 
public function getLongitud(){
return $this->longitud;
}

/**
 * SET: LONGITUD
 */ 
public function setLongitud($longitud){
$this->longitud = $longitud;
return $this;
}

public function añadirRemolque($longitud_remolque){
    $this -> añadirRemolque = $this -> añadirRemolque + $longitud_remolque;
}
}
?>