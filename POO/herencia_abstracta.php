<?php
/**
 * clase: Es una plantilla que contiene atributos y metodos que describen un objeto
 * que nos sirven para crear objetos
 * 
 * clase abstracta: Es una plantilla donde podemos tener atributos y metodos que pueden ser heredados
 *  pero la clase no puede ser instanciada
 */


#instanciar
abstract class Humano{
    //atributos y metodos
    public $nombre;
    public $apellido;
    public $telefono;

    //NOTA: una clase abstracta debe tener como minimo un metodo abstracto

    /**
     * metodo abstracto: No asignamos comportamiento solo lo declaramos con abstract
     * 
     * metodo: Asignamos el comportamiento que va tener el metodo
     */
    abstract function saludar();

    public function imprimir(){
        return "Este es tu nombre " . $this->nombre;
    }
}


class Estudiante2 extends Humano{

    public function saludar()
    {
        return "Hola estudiantes";
    }
}

$estudiante = new Estudiante2();
echo $estudiante->imprimir();

class Profesor extends Humano{

    public function saludar()
    {
        return "Hola profesores, que tal?";
    }
}

class Humano2{
    public $nombre;
    public $apellido;
    public $telefono;
}

/** NOTA: EN PHP NO HAY HERENCIA MULTIPLE */



?>