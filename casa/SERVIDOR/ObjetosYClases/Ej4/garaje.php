<?php

// Clase base Vehiculo
abstract class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    // Método circula
    public function circula() {
        echo "El vehículo circula. <br/>";
    }

    // Método añadir_persona que modifica el peso del vehículo
    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }

    // Getter y Setter
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

    //Método __toString que muestra información del objeto
    public function __toString()
    {
        return "Vehículo de color: " . $this->color . " y peso: " . $this->peso . "Kg.<br/>";
    }
}

// Clase Cuatro_ruedas que hereda de Vehiculo
class Cuatro_ruedas extends Vehiculo {
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    public function repintar($color) {
        $this->set_color($color);
    }

    public function getNumeroPuertas() {
        return $this->numero_puertas;
    }

    // Definición del método añadir_persona
    public function añadir_persona($peso_persona) {
        $this->set_peso($this->get_peso() + $peso_persona);
    }
}

// Clase Dos_ruedas que hereda de Vehiculo
class Dos_ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        echo "Se han añadido $litros litros de gasolina.";
    }

    // Definición del método añadir_persona para Dos_ruedas
    public function añadir_persona($peso_persona) {
        // Añadir el peso de la persona más 2 kg del casco
        $peso_total = $peso_persona + 2;
        $this->set_peso($this->get_peso() + $peso_total);
    }
}

// Clase Coche que hereda de Cuatro_ruedas
class Coche extends Cuatro_ruedas {
    private $numero_cadenas_nieve;

    public function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function quitar_cadenas_nieve($num) {
        $this->numero_cadenas_nieve -= $num;
    }

    public function getNumeroCadenasNieve() {
        return $this->numero_cadenas_nieve;
    }
}

// Clase Camion que hereda de Cuatro_ruedas
class Camion extends Cuatro_ruedas {
    private $longitud;

    public function __construct($color, $peso, $numero_puertas, $longitud) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud = $longitud;
    }

    public function añadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }

    public function get_longitud() {
        return $this->longitud;
    }
}

?>
