<?php

class Cuadrado2{
    public $lado;

    public function calcularArea(){
        $area = $this->lado * $this->lado;
        echo "El area del cuadrado es " . $area;
    }
}

class Circulo2 extends Cuadrado2{
    public $radio;
    
    public function calcularArea(){
        $area = pi() * $this->radio ** 2;
        echo "El area del cuadrado es " . $area;
    }
}

interface Figura{

}


class Adulto {
    public function pago(){
        echo "Es mayor de edad puede pagar";
    }
}

class Niño extends Adulto{
    public function pago()
    {
        throw new Exception("el niño no puede pagar");
    }
}

//padre
interface Pago{
	public function pago();

}

class Adulto2 implements Pago{
    public function pago(){
        //code..
    }
}

class Niño2{
    
}


?>