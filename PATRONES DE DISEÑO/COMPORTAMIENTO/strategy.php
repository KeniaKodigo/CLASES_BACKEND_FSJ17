<?php

class Pagos{
    public function pago($tipo){
        if($tipo == "efectivo"){

        }else if($tipo == "tarjeta"){

        }else if($tipo == "billetera electronica"){

        }
    }
}

#aplicando el patron strategy
interface StrategyPagos{
    public function procesarPago();
}

#creando las estrategias
class Efectivo implements StrategyPagos{

    public function procesarPago(){
        return "Usted esta pagando en efectivo, no se hara ningun proceso";
    }
}

class Tarjeta implements StrategyPagos{

    public function procesarPago(){
        return "Usted esta pagando con tarjeta, ingrese el PIN";
    }
}

class BilleteraElectronica implements StrategyPagos{

    public function procesarPago(){
        return "Usted esta pagando con su billetera electronica, ingrese sus datos";
    }
}

#clase donde se van a recibir las estrategias
class Procesar{
    #atributo privado
    //validando que el atributo privado solo reciba informacion de la interfaz Strategy
    private StrategyPagos $estrategia;

    //set (capturar) y get (retornar) (encapsulamiento)
    #metodo donde recibimos la estrategia
    public function setPagos(StrategyPagos $pago){
        $this->estrategia = $pago;
    }

    #metodo donde retornamos el comportamiento de la estrategia que elegimos
    public function getPagos(){
        return $this->estrategia->procesarPago();
        //return "Usted esta pagando con tarjeta, ingrese el PIN";
    }
}

$pago = new Procesar();
$pago->setPagos(new Efectivo);
echo $pago->getPagos();

echo "<br>";
$pago2 = new Procesar();
$pago2->setPagos(new BilleteraElectronica);
echo $pago2->getPagos();


?>