<?php
require_once ("vehiculo.php");
class Cuatro_ruedas extends Vehiculo{
    private $num_puertas;



public function __construct($color, $peso, $num_puertas) {
    parent::__construct($color, $peso);
    $this-> $num_puertas = $num_puertas;
    }


    public function get_num_puertas(){
        return $this->num_puertas;
        }

        public function set_num_puertas($num_puertas){
            $this->num_puertas = $num_puertas;
            }    
            
            
     public function repintar($color){
        $this->color = $color; //this-> color => para llamar al metodo de la clase padre

     }

     
     
   }  
?>