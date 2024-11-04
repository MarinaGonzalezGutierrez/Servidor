<?php
require_once ("cuatro_ruedas.php");

class Coche extends Cuatro_ruedas{
private $numero_cadenas_nieve;

public function __construct($color, $peso, $num_puertas,$numero_cadenas_nieve) {
    parent::__construct($color, $peso, $num_puertas);
    $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    //nohace falta, pero lo necesito para el constructor
    public function get_numero_cadenas_nieve(){
        return $this->num_cadenas_nieve;
        }

        public function set_numero_cadenas_nieve($num_cadenas_nieve){
            $this->num_cadenas_nieve = $num_cadenas_nieve;
            } 
            
    public function añadir_cadenas_nieve($num){
$this-> añadir_cadenas_nieve = $this ->añadir_cadenas_nieve + $num;
    }


}
?>