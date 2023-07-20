<?php
/**
 * open closed => solucion crearnos una clase abstracta o interfaz
 */
class Figura{
    public $lado;
    public $altura;
    public $base;
    public $radio;

    public function calcularArea($figura){
        if($figura == "cuadrado"){
            $area = $this->lado * $this->lado;
        }else if($figura == "circulo"){
            $area = pi() * $this->radio ** 2;
        }else if($figura == "triangulo"){
            $area = $this->base * $this->altura / 2;
        }else if($figura == "rectangulo"){
            //formula
        }
    }

    
}

interface Figura2{
    public function calcularArea();
}

class Triangulo2 implements Figura2{
    public function calcularArea()
    {
        //code..
    }
}

class Circulo2 implements Figura2{
    public function calcularArea()
    {
        //code..
    }
}





?>