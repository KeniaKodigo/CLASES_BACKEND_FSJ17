<?php

/**
 * Responsabilidad unica: Una clase tiene una sola forma o unica manera de cambiar, una clase una responsabilidad
 */

#violando el principio, porque la clase tiene mas de una responsabilidad
class Vehiculo{
    
    public function registrar(){

    }

    public function actualizar(){
        
    }

    public function eliminar(){
        
    }

}

#cumpliendo el principio
class ConexionBD{
    public function conectar(){

    }
}

class Autenticar{
    public function permisosAutenticacion(){

    }

    public function iniciarSesion(){

    }
}

class Reportes{
    public function obtenerVehiculos(){

    }

    public function masVendido(){

    }

    public function logistica(){
        //consulta SQL
        
    }
}



class Inventario{
    /**
     * categoria, ingresos, salidas
     * stock_productos
     */
}

class GestionProductos{

}

?>