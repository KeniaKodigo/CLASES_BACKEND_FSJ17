<?php

interface exportDocument{
    public function exportarPDF();
    public function exportarJSON();
    public function exportarText();
}

class BoletaPago implements exportDocument{
    public function exportarPDF()
    {
        return  "Su boleta de pago esta en PDF";
    }

    public function exportarJSON()
    {
        throw new Exception("no se puede exportar en JSON");
    }

    public function exportarText()
    {
        throw new Exception("no se puede exportar en texto");
    }
}


interface exportPDF{
    public function exportarPDF();
}

interface exportJSON{
    public function exportarJSON();
}

interface exportTEXT{
    public function exportarTEXT();
}

class Boleta implements exportPDF{
    public function exportarPDF(){

    }
}

class Factura implements exportPDF, exportJSON{

    public function exportarPDF(){

    }

    public function exportarJSON()
    {
        
    }
}

?>