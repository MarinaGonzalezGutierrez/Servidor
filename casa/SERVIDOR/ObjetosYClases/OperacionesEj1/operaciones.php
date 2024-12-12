<?php
require_once 'ejecutar.php';
class Operaciones {
private $num1; 
private $num2;

public function __construct($num1, $num2) {
    $this->num1 = $num1;
    $this->num2 = $num2;
    }


    public function getNum1(){
        return $this -> num1;
    }
    
    public function setNum1($num1){
        $this -> num1 = $num1;
    }

    public function getNum2(){
        return $this -> num2;
    }
    
    public function setNum2($num2){
        $this -> num2 = $num2;
    }


   
    public function suma() {
        echo "Suma :";
        return $this->num1 + $this->num2;
    }

    public function resta() {
        echo "Resta :";
        return $this->num1 - $this->num2;
    }

    public function multiplicacion() {
        echo "Multiplicacion :";
        return $this->num1 * $this->num2;
    }

    public function division() {
        if ($this->num2 == 0) {
            return "Division por cero no permitida";
        }
        echo "Division :";
        return $this->num1 / $this->num2;
    }

    public function __toString(){
        return "Num1 y Num2 :".$this ->num1." ".$this -> num2;
            
        }

}


?>