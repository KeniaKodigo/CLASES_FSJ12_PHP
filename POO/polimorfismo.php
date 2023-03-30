<?php
/** Aplicando polimorfismo */

class Animal2{
    public function hacerSonido(){
        return "Los animal hacen sonidos diferentes";
    }
}

abstract class Animal{
    abstract function hacerSonido();
}

interface Animal3{
    /**
     * Nota: Las interfaces son contratos donde las clases que implementan la interfaz estan obligadas a tener los metodos que tiene dicha interfaz
     * 
     * en las interfaces los metodos no tienen comportamiento
     */
    public function hacerSonido();
    public function obtenerNombre();
}

class Gato extends Animal{

    public function hacerSonido()
    {
        return "Los gatos le hacen miau miau";
    }
}

class Gallo extends Animal{

    public function hacerSonido()
    {
        return "Los gallos le hacen quiquiriki";
    }
}

class Perro extends Animal{

    public function hacerSonido()
    {
        return "Los perros le hacen wuaf wuaf";
    }
}


?>