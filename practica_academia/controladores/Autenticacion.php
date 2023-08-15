<?php

require "Conexion.php";

class Autenticacion extends ConexionBD{
    protected $correo;
    protected $password;

    public function iniciarSesion(){
        if(isset($_POST['correo'], $_POST['password'])){
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];

            $this->conectar();
            //select * from administradores where correo = ? and password = ? and id_estado = 1
            $query = "SELECT id, nombre, correo, password FROM administradores WHERE correo = '$this->correo' AND password = '$this->password' AND id_estado = 1";
            $resultado = mysqli_query($this->conexion, $query);

            /**
             * mysqli_fetch_assoc
             * mysqli_num_rows = saca el numero de registros (filas)
             */
            $numero_filas = mysqli_num_rows($resultado);
            $admin = mysqli_fetch_assoc($resultado);
            if($numero_filas > 0){
                //creando una sesion
                /**
                 * session_destroy()
                 */
                $_SESSION['nombre_admin'] = $admin['nombre'];
                //imprimiendo la sesion
                #echo $_SESSION['nombre_admin'];

                //redireccionamos a home.php
                header("location: home.php");
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                    credenciales incorrectas
                </div>";
            }

        }
    }
}

?>