<?php

/**
 * sustitucion de liskov: Las clases hijas deben de reemplazar a la clase
 * padre
 */

#violando el principio
class TareasProgramador{

    public function codificar(){
        //code..
    }

    public function diseñar(){

    }

    public function analizarDatos(){

    }

    public function seguridad(){

    }

    public function testear(){
        
    }
}

class DeveloperFrontend extends TareasProgramador{
    public function codificar(){
        //code..
    }

    public function diseñar(){
        //code..
    }

    public function testear(){
        throw new Exception("Los frontend no se dedican a testear");
    }
}

class DeveloperTester extends TareasProgramador{

    public function testear(){
        //code..
    }
}

#cumpliendo el principio de LISKOV => tener una clase abstracta o interfaz como padre

interface tareasBackend{
    public function codificar();
}

//padre
interface tareasFrontend{
    public function diseñar();
}

interface tareasDatos{
    public function analizarDatos();
}

class DeveloperFullstack implements tareasBackend, tareasFrontend, tareasDatos{
    public function codificar(){

    }

    public function diseñar(){

    }

    public function analizarDatos(){

    }
}

class DeveloperDatos implements tareasDatos{
    public function analizarDatos()
    {
        
    }
}



?>