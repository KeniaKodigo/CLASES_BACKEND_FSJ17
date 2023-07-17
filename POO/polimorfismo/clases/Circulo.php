<?php
require '../clases/Figura.php';
class Circulo extends Figura{
    // area = pi * r^2
    public $radio;

    public function calcularArea(){
        //metodo de php => pi() 
        $area = pi() * $this->radio ** 2;
        //number_format => metodo para formatear el numero aproximandolo y asignado cuantos decimales queremos
        //round() => aproximamos la cantidad
        return "El area del circulo es: " . number_format($area, 2);
        //toFixed()
    }
    
}

/*$evaluar = new Circulo;
$evaluar->radio = 5;
echo $evaluar->calcularArea();*/

?>