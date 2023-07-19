<?php

class Admin{

    public function registrarUsuarios(){

    }

    public function solicitarPermisos(){

    }

    public function tipoUsuario($tipo){
        if($tipo == "profesor"){

        }else if($tipo == "estudiante"){

        }else if($tipo == "administrador"){

        }else if($tipo == "secretaria"){

        }
    }

    public function actualizarCurricula(){

    }
}

//asignar una clase abstracta o interfaces
abstract class TipoUsuario{
    protected $usuario;
    protected $password;

    abstract function obtenerPermisos();
}

class Profesor extends TipoUsuario{

    public function obtenerPermisos()
    {
        
    }
}

class PadresFamilia extends TipoUsuario{
    public function obtenerPermisos()
    {
        
    }
}



?>