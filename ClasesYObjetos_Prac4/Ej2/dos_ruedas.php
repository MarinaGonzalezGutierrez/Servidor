<?php
require_once = "vehiculo.php";
class Dos_ruedas extends Vehiculo{
private $cilindrada;

public function __construct($color, $peso, $num_puertas) {
    $this->cilindrada = $cilindrada;
    }

    public function get_cilindrada(){
        return $this->cilindrada;
        }

        public function set_cilindrada($cilindrada){
            $this->cilindrada = $cilindrada;
            }    


       public function poner_gasolina($litros){
        $this.peso = $this.peso + $litros;
       }     
            

}
?>