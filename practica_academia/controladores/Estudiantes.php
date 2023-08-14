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
        if(isset($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['password'], $_POST['bootcamp'], $_POST['materias'])){

            $this->nombre = $_POST['nombre']; //kenia
            $this->direccion = $_POST['direccion'];
            $this->telefono = $_POST['telefono'];
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];
            $this->id_bootcamp = $_POST['bootcamp'];
            $this->id_estado = 1;
            $this->id_rol = 3;
            $materias =  $_POST['materias']; //[]

            #INSERT INTO table(campos) VALUES (valores)
            $consulta = "INSERT INTO estudiantes(nombre, direccion, telefono, correo, password, id_bootcamp, id_estado, id_rol) VALUES ('$this->nombre', '$this->direccion', $this->telefono, '$this->correo', '$this->password', $this->id_bootcamp, $this->id_estado, $this->id_rol)";

            $resultado = mysqli_query($this->conexion, $consulta);

            //SELECT => []
            //insert => TRUE/FALSE, objeto
            //empty() => metodo para validar si algo esta vacio
            if(!empty($resultado)){
                $query2 = "SELECT * FROM estudiantes ORDER BY id DESC LIMIT 1";
                $resultado2 = mysqli_query($this->conexion, $query2);
                $estudiante = mysqli_fetch_assoc($resultado2);
                $id_estudiante = $estudiante["id"];
                
                //iterando el arreglo de materias
                for($i=0; $i < count($materias); $i++){
                    //[1,2,3] => $materias[$i]
                    $query3 = "INSERT INTO detalle_materia_estudiante(id_estudiante, id_materia) VALUES ($id_estudiante, $materias[$i])";
                    $resultado3 = mysqli_query($this->conexion, $query3);
                }
                //header() => redireccionar
                //header("location: index.php");
                echo "<script>
                    window.location = 'lista_estudiantes.php'
                </script>";
            }else{
                echo "error en la consulta";
            }
        }
    }

    #obtener todos los estudiantes activos o reubicado
    public function obtenerEstudiantesActivos(){
        $this->conectar();
        $query = "SELECT estudiantes.id, estudiantes.nombre, estudiantes.telefono, estudiantes.correo, bootcamps.bootcamp, estado.estado FROM estudiantes INNER JOIN bootcamps ON estudiantes.id_bootcamp = bootcamps.id INNER JOIN estado ON estudiantes.id_estado = estado.id WHERE estudiantes.id_estado = 1 OR estudiantes.id_estado = 5";

        $resultado = mysqli_query($this->conexion, $query);
        return $resultado;
    }

    public function obtenerEstudianteById(){
        if(isset($_POST['id_estudiante'])){
            $this->id = $_POST['id_estudiante']; //7
            $this->conectar();
            $query = "SELECT * FROM estudiantes WHERE id = $this->id"; //[]
            $resultado = mysqli_query($this->conexion, $query);
            return $resultado;
        }
    }

    public function actualizar(){
        if(isset($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['password'], $_POST['id_estudiante'])){

            $this->nombre = $_POST['nombre']; //kenia
            $this->direccion = $_POST['direccion'];
            $this->telefono = $_POST['telefono'];
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];
            $this->id = $_POST['id_estudiante'];

            $query = "UPDATE estudiantes SET nombre = '$this->nombre', direccion = '$this->direccion', telefono = $this->telefono, correo = '$this->correo', password = '$this->password' WHERE id = $this->id"; //objeto null - objeto valores
            $resultado = mysqli_query($this->conexion, $query);
            if(!empty($resultado)){
                echo "<script>
                    window.location = 'lista_estudiantes.php'
                </script>";
            }else{
                echo "Error al actualizar el estudiante";
            }
        }
    }

    public function obtenerEstadoDesertadoEgresado(){
        $this->conectar();
        $query = "SELECT * FROM estado WHERE id = 3 OR id = 4";
        $resultado = mysqli_query($this->conexion, $query);
        return $resultado;
    }
}

?>