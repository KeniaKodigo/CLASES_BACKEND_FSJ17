<?php

require './Figura.php';

class Triangulo extends Figura{
    //base x altura / 2

    public $base;
    public $altura;

    public function calcularArea()
    {
        $area = $this->base * $this->altura / 2;
        return "El area del triangulo es: " . $area;

    }
}

?>