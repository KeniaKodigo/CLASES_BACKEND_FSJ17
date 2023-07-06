<?php

/**
 * PILAR DE ABSTRACCION: Extraemos lo mas relevante para trabajar con una clase
 */
class Planilla{
    /** asignacion de atributos:
     * nombre, cargo, salario, horas de trabajo, afp, isss, renta
     * 
     * modificador de acceso: public, private, protected
     * public: damos acceso dentro de la clase, fuera de la clase y clases hijas
     * protected: damos acceso solo dentro de la clase y clases hijas
     * private: SOLO DENTRO DE LA CLASE
     */

    #encapsulando los atributos
    public $nombre;
    protected $cargo;
    protected $salario_bruto;
    protected $salario_neto;
    //protected $horas_trabajo;
    private $afp;
    private $isss;
    private $renta;

    #metodos
    //constructor => es un metodo que se encarga de inicializar el objeto
    public function __construct($nombre, $cargo, $salario)
    {
        //this = hace referencia a un atributo o metodo dentro de la clase
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->salario_bruto = $salario;
        //$this->horas_trabajo = $horas;
    }

    public function calcularDeducciones(){
        //gana mas de 520 se le descuenta renta 10%, afp 7.75%, isss 7.25%
        $this->afp = $this->salario_bruto * 0.0775;
        $this->isss = $this->salario_bruto * 0.0725;
        
        if($this->salario_bruto >= 520){
            $this->renta = $this->salario_bruto * 0.10;

            $this->salario_neto = $this->salario_bruto - ($this->afp + $this->isss + $this->renta);
            return $this->salario_neto;
        }else{
            $this->salario_neto = $this->salario_bruto - ($this->afp + $this->isss);
            return $this->salario_neto;
        }
    }

    public function resumen(){
        return "<b>Empleado: </b> $this->nombre<br><b>Cargo:</b> $this->cargo<br><b>Salario Bruto:</b> $$this->salario_bruto<br><b>Salario Neto:</b> $$this->salario_neto";
    }
}
#instanciando la clase
$empleado1 = new Planilla("Kenia Paiz","Vendedora",1500);
$empleado1->calcularDeducciones();
echo $empleado1->resumen();

?>