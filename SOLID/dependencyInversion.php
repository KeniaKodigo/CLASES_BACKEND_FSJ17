<?php
/**
 * Inversion de Dependencia:
 * Las clases de alto nivel no pueden depender de las clases de bajo nivel ambas deben de depender de abstracciones
 */

#violando el principio

//clase de bajo nivel
class FPDF{
    public function procesarDocumento(){
        return "Imprimiendo el documento en FPDF";
    }
}

class DOMPDF{
    public function procesarDocumento(){
        return "Imprimiendo el documento en DOMPDF";
    }
}

//clase de alto nivel
class Inventario{

    public function imprimirPDF(){
        //dependemos demasiado de un solo tipo de objeto
        $reporte = new FPDF();
        echo $reporte->procesarDocumento();
    }
}

#solucion de la inversion de dependencia

interface formatoPDF{
    public function procesarDocumento();
}

//bajo nivel
class FPDF2 implements formatoPDF{
    public function procesarDocumento(){
        return "Imprimiendo el documento en FPDF con un intermediario";
    }
}

class DOMPDF2 implements formatoPDF{
    public function procesarDocumento(){
        return "Imprimiendo el documento en DOMPDF con un intermediario";
    }
}

//alto nivel
class Inventario2{

    //formatoPDF => es la interfaz, tenemos acceso a todos los objetos de ese tipo
    public function imprimirPDF(formatoPDF $formato){
        //retorno el metodo en comun de las hijas
        echo $formato->procesarDocumento();
    }

}

$inventario1 = new Inventario2;
$inventario1->imprimirPDF(new FPDF2);

$inventario2 = new Inventario2;
$inventario2->imprimirPDF(new DOMPDF2);
?>