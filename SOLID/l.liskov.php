<?php

/**
 * Sustitucion de LISKOV: Este principio hace referencia que las clases hijas pueden reemplazar a las clases padres
 */

class Animal{

    public function volar(){
        //code..
    }

    public function nadar(){
        //code..
    }

    public function caminar(){
        //code..
    }

    public function imitar(){
        //code..
    }
}


class Loro extends Animal{

}

class Serpiente extends Animal{

    public function volar()
    {
        throw new Exception("Las serpientes no vuelan");
    }

    public function nadar()
    {
        return "Las serpientes nadan";
    }
}

class Pinguino extends Animal{
    public function volar()
    {
        throw new Exception("Los pinguinos no vuelan");
    }

    public function nadar()
    {
        //code..
    }

    public function caminar()
    {
        //code..
    }

}

class Conejo extends Animal{
    public function volar()
    {
        throw new Exception("Los conejos no vuelan");
    }

    public function nadar()
    {
        //code..
    }

    public function caminar()
    {
        //code..
    }
}

/**
 * clasificar animales => interface, clase abstracta
 */

 interface AnimalTerrestres{
    public function caminar();
 }


interface AnimalAereos{
    public function volar();
 }

interface AnimalesAcuaticos{
    public function nadar();
}

class Loro2 implements AnimalAereos, AnimalTerrestres, AnimalesAcuaticos{

    public function caminar()
    {
        //code..
    }

    public function nadar()
    {
        //code..
    }

    public function volar()
    {
        //code..
    }
}

class Pinguino2 implements AnimalTerrestres, AnimalesAcuaticos{
    public function caminar()
    {
        //code..
    }

    public function nadar()
    {
        //code..
    }
}

class Conejo2 implements AnimalTerrestres{
    public function caminar()
    {
        //code..
    }
}


?>