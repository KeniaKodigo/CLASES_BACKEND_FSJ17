<?php

/*
La clase Notificadocadora original solo envia emails.

Problema, usuarios quieren un mensaje por SMS, otros por facebook y otraos por slack

*/

class Notifier {
    public $listMails;

    //Constructor
    public function __construct($lista)
    {
        $this->listMails = $lista;
    }
    
    //Metodo send() email
    public function send($mensaje)
    {
        echo "Enviando mensaje $mensaje";
    }

}

?>