<?php

/**
 * abierto y cerrado: las clases deben estar abiertas a extension y cerradas a modificacion
 * 
 * estructuras condicionales => if-else if-else switch
 */

#violando al principio
class Pagos{
    public function tipo($forma_pago, $cantidad){
        switch($forma_pago){
            case "tarjeta":
                //code..
                break;
            case "bitcoin":
                //code..
                break;
            case "paypall":
                //code..
                break;
            case "deposito":
                //code..
                break;
            default:
                echo "Ingrese una forma de pago";
        }
    }

    public function validar(){

    }

}

#cumpliendo el principio open closed => aplicar una clase abstracta o una interfaz

abstract class FormaPago{
    //atributos (opcional)
    public $cantidad;

    abstract function procesarPago();
}

class Tarjeta extends FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Bitcoin extends FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Paypall extends FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class DepositarCuenta extends FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Uphoald extends FormaPago{
    public function procesarPago()
    {
        //code...
    }
}



?>