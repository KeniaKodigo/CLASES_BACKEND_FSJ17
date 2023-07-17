<?php

#clase padre

abstract class Figura{

    abstract function calcularArea();
}


#ejemplo de clase abstracta
abstract class Animal{
    public $nombre;
    public $edad;
    public $especie;
    //que tenga por lo menos un metodo abstracto
    /**
     * metodo abstracto => es cuando se declara el metodo pero sin comportamiento y los hijos obligatoriamente tiene que tener ese metodo y declarar comportamiento
     */

    abstract function hacerSonido();

    public function saludar(){
        return "El reino animal te esta saludando";
    }
}

class Vaca extends Animal{
    
    public function info(){
        return "El nombre de la vaca es " . $this->nombre;
    }

    public function hacerSonido()
    {
        return "La vaca le hace muuuu";
    }
}

/*$vaca = new Vaca;
echo $vaca->saludar();*/



?>