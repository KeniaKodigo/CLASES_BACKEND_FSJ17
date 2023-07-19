<?php

//declarando una interfaz (contrato)
interface FormaPago{
    //no hay atributos

    //solo puedo tener metodos abstractos
    public function procesarPago();
}

interface TipoTarjeta{
    public function tipoTarjeta();
}

class TarjetaCredito implements FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Bitcoin implements FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Paypall implements FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class DepositarCuenta implements FormaPago{

    public function procesarPago()
    {
        //code...
    }
}

class Uphoald implements FormaPago{
    public function procesarPago()
    {
        //code...
    }
}


//implementando mas de una interfaz
class TarjetaVisa implements TipoTarjeta, FormaPago{

    public function procesarPago()
    {
        
    }

    public function tipoTarjeta()
    {
        
    }
}

?>