<?php

require './Figura.php';

class Cuadrado extends Figura{
    //lado x lado
    public $lado;

    #sobreescribiendo el metodo de la clase padre
    public function calcularArea()
    {
        //$area = $this->lado * $this->lado;
        //pow($this->lado, 2);
        $area = $this->lado ** 2;
        return "El area del cuadrado es: " . $area;
    }
    
}

?>