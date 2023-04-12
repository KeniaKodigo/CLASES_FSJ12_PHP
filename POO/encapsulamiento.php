<?php

/**
 * Encapsulamiento: Es la manera de como podemos restringir los atributos y metodos de una clase
 * 
 * Modificadores de acceso: public, private, protected
 * 
 * public: acceso general (hay acceso dentro de la clase, fuera de la clase y clases hijas)
 * protected: solamente tenemos acceso dentro de la clase y clases heredadas
 * private: solo hay acceso dentro de la clase
 */

class Animal{
    public $nombre;
    protected $edad;
    private $color; //cafe

    private function saludar(){
        echo "Hola";
    }
}

class Gato extends Animal{

    public function obtenerGato(){
        echo "Su nombre es " . $this->nombre . " y su edad es " . $this->edad;
    }
}

$animal = new Animal();
$animal->nombre = "Pepe";



?>