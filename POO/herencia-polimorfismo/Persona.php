<?php
#clase Base
class Persona{
    #encapsulamiento
    public $nombre;
    public $edad;
    protected $telefono;
    protected $direccion;
    protected $correo;

    #metodo constructor
    public function __construct($nombre, $edad, $telefono, $direccion, $correo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->correo = $correo;
    }

    public function informacionGeneral(){
        return "<b>Nombre Completo: </b> $this->nombre<br><b>Edad: </b> $this->edad<br><b>Telefono: </b> $this->telefono<br><b>Direccion: </b> $this->direccion<br><b>Correo Electronico: </b> $this->correo<br>";
    }
}

?>