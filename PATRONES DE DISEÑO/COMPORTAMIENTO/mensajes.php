<?php

#interface Strategy

use Facebook as GlobalFacebook;
use Slack as GlobalSlack;

interface StrategyRedes{
    public function enviarMSJ($mensaje);
}

#crear las estrategias
class Slack2 implements StrategyRedes{
    public function enviarMSJ($mensaje){
        return "Se ha compartido por via slack el siguiente mensaje: $mensaje";
    }
}

class WhatsApp implements StrategyRedes{
    public function enviarMSJ($mensaje){
        return "Se ha compartido por via WhatsApp el siguiente mensaje: $mensaje";
    }
}

class Facebook2 implements StrategyRedes{
    public function enviarMSJ($mensaje){
        return "Se ha compartido por via facebook el siguiente mensaje: $mensaje";
    }
}

#clase donde vamos elegir que estrategia queremos
class Compartir{
    #atributo privado
    private StrategyRedes $red_social;

    #set y get

    public function setMensaje(StrategyRedes $estrategia){
        $this->red_social = $estrategia;
    }

    public function getMensaje($mensaje){ //hola
        //return
        return $this->red_social->enviarMSJ($mensaje); //hola
    }
}

/*$mensaje1 = new Compartir();
$mensaje1->setMensaje(new Facebook2);
echo $mensaje1->getMensaje("Mañana ya estamos de vacacion :)");
echo "<br>";
$mensaje2 = new Compartir();
$mensaje2->setMensaje(new Slack2);
echo $mensaje2->getMensaje("Disfruten las vaciones pero tambien estudien");*/


/*switch($_POST['red']){
    case "slack":
        $mensaje2 = new Compartir();
        $mensaje2->setMensaje(new Slack2);
        echo $mensaje2->getMensaje($_POST['mensaje']);
    break;
    case "facebook":
        $mensaje2 = new Compartir();
        $mensaje2->setMensaje(new Facebook2);
        echo $mensaje2->getMensaje($_POST['mensaje']);
}*/


//readline()
?>