<?php

/**
 * segregacion de interfaces: "divide y venceras"
 * es mejor tener varias interfaces a tener solo una
 * 
 * maximo solo 3 metodos
 */

#violando el principio
interface imprimirDocumento{
    public function PDF();

    public function WORD();

    public function JSON();

    public function Consola();
}

class Factura implements imprimirDocumento{
    public function PDF(){
        //code..
    }

    public function WORD(){
        //code..
    }

    public function JSON(){
        throw new Exception("La factura solo se imprimira en formato pdf y word");
    }

    public function Consola(){
        throw new Exception("La factura solo se imprimira en formato pdf y word");
    }
}

#cumpliendo con el principio
interface FormatoDocumento{
    public function PDF();

    public function WORD();
}

interface FormatoSalida{
    public function JSON();

    public function Consola();
}

class ComprobanteFiscal implements FormatoDocumento{
    public function PDF(){

    }

    public function WORD(){
        
    }
}

?>