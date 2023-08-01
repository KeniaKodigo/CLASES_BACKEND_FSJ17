<?php

#Aplicando el patron adapter

#problematica => telefono acepta cargadores de 24 volteos
class Cargador12{
    public function cargar12(){
        return "Estas cargando el celular con 12 volteos";
    }

    public function proceso(){
        return "jnxkls,;c";
    }
}

class Cargador24{
    public function cargar24(){
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

    //sobreescribir el metodo de la clase Cargador24
    public function cargar24()
    {
        return $this->cargador->cargar12(); //Estas cargando el celular con 12 volteos
    }
}


class Telefono{
    //metodo solo recibe objetos de Cargador24
    public function seleccionarCargador(Cargador24 $cargador){ //instancia
        return $cargador->cargar24(); //Estas cargando el celular con 24 volteos
    }
}

//instanciar una clase
$samsung = new Telefono();
echo $telefono->seleccionarCargador(new Cargador24);
echo "<h3>Utilizando un adaptador</h3>";

$huaweii = new Telefono();
echo $telefono->seleccionarCargador(new AdapterCargador12(new Cargador12));




?>