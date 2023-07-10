<?php
require "./Persona.php";

#clase hija
class Alumno extends Persona{
    //carnet, materia, grado, encargado
    protected $carnet;
    public $materia;
    public $grado;
    protected $encargado;

    #sobreescribiendo el constructor de la clase padre (Persona)
    public function __construct($nombre, $edad, $telefono, $direccion, $correo, $carnet, $materia, $grado,$encargado)
    {
        #heredando la informacion del constructor padre
        parent::__construct($nombre, $edad, $telefono, $direccion, $correo);
        #asignando la informacion extra que tiene la clase hija
        $this->carnet = $carnet;
        $this->materia = $materia;
        $this->grado = $grado;
        $this->encargado = $encargado;
    }

    #metodo para imprimir la informacion extra del estudiante
    public function informacionEstudiantil(){
        return "<b>Carnet: </b> $this->carnet<br><b>Materia Favorita: </b> $this->materia<br><b>Grado/Seccion: </b> $this->grado<br><b>Encargado: </b> $this->encargado<br>";
    }
}



?>