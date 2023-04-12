<?php

/**
 * POO: clases y objetos
 * Clase: Es una plantilla, molde donde tenemos metodos y atributos para describir nuestro objeto
 * 
 * atributos: Son caracterisiticas que va tener el objeto
 * metodos: Acciones o comportamiento que tiene el objeto
 * 
 * Pilares de programacion orientada a objetos: abstraccion, encapsulamiento, herencia, polimorfismo
 */

class Vehiculo{
    #asignacion de atributos
    public $modelo;
    public $color;
    public $marca;
    public $numero_puertas; 
    //Atributos: modelo, color, marca, numero de puertas => publicos, privados, protegidos

    /** constructor:  Es un metodo que podemos inicializar nuestro objeto, podemos mandar informacion estatica
     * o decirle al usuario que mande la informacion a travez de argumentos
     */
    public function __construct($mod, $col, $mar, $num)
    {
        /** utilizando el this, hacemos referencia a los atributos de la clase */
        $this->modelo = $mod;
        $this->color = $col;
        $this->marca = $mar;
        $this->numero_puertas = $num;
    }


    #Asignacion de metodos
    private function encender(){
        //code..
        $item = "off"; //variable local
    }

    protected function apagar(){
        $this->encender();
    }

    public function abrirPuerta(){

    }

    public function obtenerModelo($modelo){
        $this->modelo = $modelo;
        echo "Ahora el modelo es: " . $this->modelo;
    }
    //Metodos: encender el carro, apagar el carro, abrir la puerta, obtener el modelo y marca
}

/**
 * instanciar: va llamar a una clase
 */

#pasando los argumentos que nos pide el metodo constructor de la clase
$carro = new Vehiculo("prueba34","rojo","honda",4);
$carro->obtenerModelo("kknkdjk");
print_r($carro);

$bicicleta = new Vehiculo("hdhuef","azul","bici",0);
$bicicleta->obtenerModelo("bici2345");

?>