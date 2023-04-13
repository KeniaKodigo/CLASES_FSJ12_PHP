<?php

class Conectar{

    /**
     * una funcion estatica no requiere ser instanciada la clase para su llamado
     */
    public static function conectarBD(){

    }


    public function usuarios(){

    }
}

$conectar = new Conectar(); //crear un objeto
$conectar->usuarios();

/**
 * :: hace referencia a los metodos, atributos que sean estaticos de la clase
 */
Conectar::conectarBD(); //llamado a la funcion 





?>