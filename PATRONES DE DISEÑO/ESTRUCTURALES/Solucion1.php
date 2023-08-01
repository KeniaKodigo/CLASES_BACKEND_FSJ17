<?php

/*
La clase Notificadocadora original solo envia emails.

Problema, usuarios quieren un mensaje por SMS, otros por facebook y otraos por slack

*/

interface sendMessages {
    public function send($mensaje);
}

class Notifier implements sendMessages{
    public $listMails;

    //Constructor
    public function __construct($lista)
    {
        $this->listMails = $lista;
    }
    
    //Metodo send() email
    public function send($mensaje)
    {
        echo "Enviando email $mensaje";
    }

}

class Sms implements sendMessages{
    public $listMails;

    //Constructor
    public function __construct($lista)
    {
        $this->listMails = $lista;
    }
    
    //Metodo send() email
    public function send($mensaje)
    {
        echo "Enviando SMS $mensaje";
    }

}

class Facebook implements sendMessages{
    public $listMails;

    //Constructor
    public function __construct($lista)
    {
        $this->listMails = $lista;
    }
    
    //Metodo send() email
    public function send($mensaje)
    {
        echo "Enviando por Facebook $mensaje";
    }

}

class Slack implements sendMessages{
    public $listMails;

    //Constructor
    public function __construct($lista)
    {
        $this->listMails = $lista;
    }
    
    //Metodo send() email
    public function send($mensaje)
    {
        echo "Enviando por Slack $mensaje";
    }

}

class Padre
{
    public function metodoXPadre($valor)
    {
        //.... muchas lineas de codigo
        return $valor * 2;
    }
}

class Hijo extends Padre
{
    public function estudiar($valor)
    {
        $tiempo = parent::metodoXPadre($valor);
        return " ... $tiempo";
    }
}

?>