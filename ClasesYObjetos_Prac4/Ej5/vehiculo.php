<?php
abstract class Vehiculo {
protected $color;
protected $peso;

public function __construct($color, $peso){
$this -> color = $color;
$this -> peso = $peso;

}

public function __toString(){
return "Peso y color :".$this ->peso." ".$this -> color;
    
}

public function circula(){
    return "El vehiculo circula";
}

//metodo asbtracto añadir persona
abstract public function añadir_persona($peso_persona);

//metodo estatico para mostrar los atributos
public static function ver_atributo($objeto){
    $atributos = get_object_vars($objeto); //pilla los objetos que le acabas de pasar
    foreach($atributos as $nombre => $valor){
        echo ucfirst($nombre)." ".$valor."<br>"; //ucfirst para que haga un salto de linea

    }
}

public function getColor(){
    return $this -> color;
}

public function setColor($color){
    $this -> color = $color;
}


public function getPeso(){
    return $this -> peso;
}

public function setPeso($peso){
    $this -> peso = $peso;
}


}
?>


<?php
//CLASE CUATRO RUEDAS
require_once "vehiculo.php";
class Cuatro_ruedas extends Vehiculo{
    private $numero_puertas;
    
    public function __construct($color, $peso, $numero_puertas){
    parent::__construct($color, $peso);
    $this -> numero_puertas = $numero_puertas;
        
    }

    //añadir persona para cuatro ruedas
    public function añadir_persona($peso_persona){
        $this -> peso += $peso_persona;
    }

    public function getNumero_puertas()
    {
        return $this->numero_puertas;
    }

    public function setNumero_puertas($numero_puertas)
    {
        $this->numero_puertas = $numero_puertas;

        return $this;
    }


}
    
?>


<?php
//CLASE COCHE
require_once "vehiculo.php";
class Coche extends Cuatro_ruedas{
    private $numero_cadenas_nieve = 0;

    public function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve){
        parent::__construct($color, $peso, $numero_puertas);
        $this -> numero_cadenas_nieve = $numero_cadenas_nieve;
        }

    public function añadir_cadenas_nieve($num){
        $this -> numero_cadenas_nieve += $num;
    }

    public function quitar_cadenas_nieve($num){
        $this -> numero_cadenas_nieve -= $num;
    }


    public function getNumero_cadenas_nieve(){
    
        return $this->numero_cadenas_nieve;
    }

 
    public function setNumero_cadenas_nieve($numero_cadenas_nieve){
    
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;

        return $this;
    }
}
?>



<?php
//CLASE CAMION
require_once "vehiculo.php";

class Camion extends Cuatro_ruedas{
private $longitud;

public function __construct($color, $peso, $numero_puertas, $longitud){
parent::__construct($color, $peso, $numero_puertas);
$this -> longitud = $longitud;
}

public function añadir_remolque($longitud_remolque){
    $this -> longitud += $longitud_remolque;
}

 
public function getLongitud(){
return $this->longitud;
}

 
public function setLongitud($longitud){
$this->longitud = $longitud;

return $this;
}

}
?>



<?php
//CLASE DOS_RUEDAS
require_once "vehiculo.php";
class Dos_ruedas extends Vehiculo{
protected $cilindrada;

 public function __construct($color, $peso, $cilindrada){
 parent::__construct($color, $peso);
 $this -> cilindrada = $cilindrada;
}

//funcion para añadir persona y casco 
  public function añadir_persona($peso_persona){
  $this -> setPeso($this -> getPeso()+($peso_persona+2));
    
  }

  public function poner_gasolina($litros){
    $this -> peso += $litros;
  }


public function getCilindrada(){
return $this->cilindrada;
}


public function setCilindrada($cilindrada){
$this->cilindrada = $cilindrada;
return $this;
}

}
?>

