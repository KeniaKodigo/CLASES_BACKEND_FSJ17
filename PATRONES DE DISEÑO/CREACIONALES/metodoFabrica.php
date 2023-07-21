<?php

#problema para crear tipos de objetos de transporte

#solucion utilizando factory method

//productos: camion, avion, barco => envio()

#1.paso: crear una interfaz para las clases que van crear objetos
interface Transporte{
    public function envio();
}

#2.paso: creando las clases que van a depender de la interfaz
class Camion implements Transporte{
    public function envio(){
        return "El envio ya esta listo y sera por via Camion";
    }
}

class Barco implements Transporte{
    public function envio(){
        return "El envio ya esta listo y se hara en barco";
    }
}

class Avion implements Transporte{
    public function envio(){
        return "El envio ya esta listo y sera por via avion";
    }
}

#paso 3: crear el metodo de fabrica (clase abstracta)
abstract class Mensajeria{
    //metodo abstracto
    #paso 4: asignar un metodo abstracto que reciba objetos de tipo de la interfaz
    abstract function obtenerTransporte() : Transporte; //avion, barco o camion

    //metodo para devolver el comportamiento de los objetos de tipo transporte
    public function imprimirEnvio(){
        //llamamos al metodo abstracto
        $transporte = $this->obtenerTransporte();
        //retornamos el metodo en comun de los transportes
        return $transporte->envio();
    }
}

class MensajeriaTerrestre extends Mensajeria{

    public function obtenerTransporte(): Transporte
    {
        //estamos obligados a instanciar un objeto (una clase) de tipo Transporte (new)
        return new Camion();
    }
}

class MensajeriaMaritima extends Mensajeria{

    public function obtenerTransporte(): Transporte
    {
        //estamos obligados a instanciar un objeto (una clase) de tipo Transporte (new)
        return new Barco();
    }
}

class MensajeriaAereo extends Mensajeria{

    public function obtenerTransporte(): Transporte
    {
        //estamos obligados a instanciar un objeto (una clase) de tipo Transporte (new)
        return new Avion();
    }
}

//metodo para recibir los datos de la Fabrica (Mensajeria)
function obtenerMensajeria(Mensajeria $mensajeria){ //mensajeria terrestre, maritima o area

    //retornamos el metodo imprimirEnvio de la clase Mensajeria
    return $mensajeria->imprimirEnvio();
}

//llamando al metodo
echo obtenerMensajeria(new MensajeriaMaritima); //

echo "<br>";
echo obtenerMensajeria(new MensajeriaTerrestre);





?>