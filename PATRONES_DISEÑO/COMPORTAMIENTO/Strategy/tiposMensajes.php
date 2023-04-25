<?php

class CompartirMensaje{
    public function enviarMsj($red){
        switch($red){
            case "whatsapp":
                //code
                break;
            case "messenger":
                //code.
                break;
            case "slack":
                //code..
                break;
        }
    }

    public function obtenerWhat(){

    }
}

#aplicar el patron strategy
interface StrategyRedSocial{
    public function enviarMsj($msj);
}

class WhatsApp implements StrategyRedSocial{
    public function enviarMsj($msj)
    {
        return "Se ha compartido por via WhatsApp: $msj";
    }
}

class Messenger implements StrategyRedSocial{
    public function enviarMsj($msj)
    {
        return "Se ha compartido por via Messenger: $msj";
    }
}

class Slack implements StrategyRedSocial{
    public function enviarMsj($msj)
    {
        return "Se ha compartido por via Slack al canal de Kodigo: $msj";
    }
}

#clase para procesar las estrategias
class Compartir{
    #atributo privado que reciba el objeto de la interfaz
    private StrategyRedSocial $red_social;

    #realizar metodo set y get
    public function setMsj(StrategyRedSocial $estrategia){
        $this->red_social = $estrategia;
    }

    #imprimiendo el comportamiento
    public function getMsj($msj){
        return $this->red_social->enviarMsj($msj);
    }
}

$mensaje = new Compartir();
$mensaje->setMsj(new Messenger);
echo $mensaje->getMsj("Mañana es dia de tacos");

$mensaj2 = new Compartir();
$mensaj2->setMsj(new Slack);
echo $mensaj2->getMsj("Mañana seguimos con patrones");


?>