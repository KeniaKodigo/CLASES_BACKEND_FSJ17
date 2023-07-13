<?php
require "../clases/Persona.php";
class Profesor extends Persona{
    //salario, horario, materia-imparte, institucion,cantidaturnos
    public $salario;
    public $horario;
    public $materiaImparte;
    public $institucion;
    public $cantidadTurnos;

    public function __construct($nombre,$edad, $telefono, $direccion, $correo, $salario, $horario, $materiaImparte, $institucion, $cantidaturnos){
      parent::__construct($nombre, $edad, $telefono, $direccion, $correo);
      $this->salario = $salario;
      $this->horario = $horario;
      $this->materiaImparte = $materiaImparte;
      $this->institucion = $institucion;
      $this->cantidadTurnos = $cantidaturnos;
    }
    public function informacionProfesor(){
      //atributo mal escrito
      return "<b>Salario: </b> $this->salario<br><b>Horario: </b> $this->horario<br><b>materiaImparte: </b> $this->materiaImparte<br><b>institucion: </b> $this->institucion<br><b>Cantidad de turnos: </b>$this->cantidadTurnos";
    }

    public function salario(){
      //atributo mal escrito
      if ($this->cantidadTurnos > 1) {
        $porcentaje = $this->salario*0.3;
        $this->salario = $this->salario + $porcentaje;
        return $this->salario;
      }
    }
//faltaba una llave
}

?>
