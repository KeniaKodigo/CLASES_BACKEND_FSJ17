<?php

#Aplicando el patron adapter

#problematica => telefono acepta cargadores de 24 volteos
class Cargador12{
    public function cargar(){
        return "Estas cargando el celular con 12 volteos";
    }
}

class Cargador24{
    public function cargar(){
        return "Estas cargando el celular con 24 volteos";
    }
}

#aplicando el patron Adapter
//1. creamos la clase adapter
class AdapterCargador12 extends Cargador24{
    //2. crear atributo privado
    private $cargador;

    //3. crear un constructor donde se reciba la clase que queremos adaptar
    public function __construct(Cargador12 $cargador12)
    {
        //atributo va ser igual a la variable de Cargador12
        $this->cargador = $cargador12;
    }
}


class Telefono{
    //metodo solo recibe objetos de Cargador24
    public function seleccionarCargador(Cargador24 $cargador){
        return $cargador->cargar(); //Estas cargando el celular con 24 volteos
    }
}

$telefono = new Telefono();
$telefono->seleccionarCargador(new Cargador24);


?>