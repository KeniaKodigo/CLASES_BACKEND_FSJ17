<?php

class ConexionBD{
    protected $conexion;

    #mysqli_connect() => sirve para obtener la informacion y conectarnos a la base de datos

    public function conectar(){
        /**
         * servidor
         * usuario => root
         * password
         * nombre de la base de datos
         */
        $this->conexion = mysqli_connect("localhost","root","","gestion_academica");
    }
}

?>