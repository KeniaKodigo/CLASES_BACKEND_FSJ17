<?php
#llamando el archivo Conexion.php
require "../controladores/Conexion.php";

class Estudiantes extends ConexionBD{
    #atributos
    protected $id;
    protected $nombre;
    protected $direccion;
    protected $telefono;
    protected $correo;
    protected $password;
    protected $id_bootcamp;
    protected $id_estado;
    protected $id_rol;
    

    /**
     * agregarEstudiante
     * actualizarEstudiante
     * cambiarEstado
     */

    public function obtenerBootcamps(){
        #select * from bootcamp 
        $this->conectar();
        $consulta = "SELECT * FROM bootcamps";
        #mysqli_query
        $resultado = mysqli_query($this->conexion, $consulta);
        //[]
        return $resultado;
    }

    public function obtenerMaterias(){
        #select * from bootcamp 
        $this->conectar();
        $consulta = "SELECT * FROM materias";
        #mysqli_query
        $resultado = mysqli_query($this->conexion, $consulta);
        //[]
        return $resultado;
    }

    public function insertar(){
        if(isset($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['password'], $_POST['bootcamp'], $_POST['materia'])){

            $this->nombre = $_POST['nombre']; //kenia
            $this->direccion = $_POST['direccion'];
            $this->telefono = $_POST['telefono'];
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];
            $this->id_bootcamp = $_POST['bootcamp'];
            $this->id_estado = 1;
            $this->id_rol = 3;
            $materias =  $_POST['materia'];

            #INSERT INTO table(campos) VALUES (valores)
            $consulta = "INSERT INTO estudiantes(nombre, direccion, telefono, correo, password, id_bootcamp, id_estado, id_rol) VALUES ('$this->nombre', '$this->direccion', $this->telefono, '$this->correo', '$this->password', $this->id_bootcamp, $this->id_estado, $this->id_rol)";
            $resultado = mysqli_query($this->conexion, $consulta);
        }
    }
}

?>