<?php

//CLASE PADRE
class Vehiculo{
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function get_color(){
        return $this->color;
    }

    public function get_peso(){
        return $this->peso;
    }

    public function set_color($color){
        $this->color = $color;
    }


    public function set_peso($peso){
        $this->peso = $peso;
    }

    public function circula(){
        echo "El vehiculo circula. <br/>";
    }

    public function añadir_persona($peso_persona){
        $this -> peso += $peso_persona;
    }

    public function __toString() {
        return 'Color: ' . $this->color . ' Peso: ' . $this->peso;
    }

//CLASE HIJA: primero required de la madre fuera y luego extends despues añadido a la clase


}
?>