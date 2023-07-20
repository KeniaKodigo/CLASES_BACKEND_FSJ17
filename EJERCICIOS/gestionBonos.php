<?php
#verificar que principio SOLID se esta violando y aplicarlo
class GestionBonos{
    public $nombre_empleado;
    public $cargo;
    public $sueldo;

    public function __construct($nombre, $sueldo, $cargo)
    {
        $this->nombre_empleado = $nombre;
        $this->sueldo = $sueldo;
        $this->cargo = $cargo;
    }

    public function agregarBono(){
        if($this->cargo == "Cajero"){
            //se le agrega un bono de $150
            $total = $this->sueldo + 150;
            echo "Usted, $this->nombre_empleado recibio un bono de $150, su sueldo a pagar este mes es de $" . $total;
        }else if($this->cargo == "Asesor Comercial"){
            //se le agrega un bono de $225
            $total = $this->sueldo + 225;
            echo "Usted, $this->nombre_empleado recibio un bono de $225, su sueldo a pagar este mes es de $" . $total;
        }else if($this->cargo == "Gerente"){
            //se le agrega un bono de $300
            $total = $this->sueldo + 300;
            echo "Usted, $this->nombre_empleado recibio un bono de $300, su sueldo a pagar este mes es de $" . $total;
        }else{
            echo "Ingrese correctamente el cargo";
        }
    }

}

$bono = new GestionBonos("Juanita Rivera",450,"Cajero");
$bono->agregarBono();

?>