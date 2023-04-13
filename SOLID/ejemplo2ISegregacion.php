<?php

interface Ave{
    public function volar();
    public function ponerHuevos();
}

class Pato implements Ave{
    public function volar()
    {
        throw new Exception("El pato no vuela");
    }

    public function ponerHuevos()
    {
        return "Poniendo huevos...";
    }
}

/** solucion aplicando segregacion de interfaces */
interface AveVoladoras{
    public function volar();
}

interface AvePonedoras{
    public function ponerHuevos();
}

class Pato2 implements AvePonedoras{
    public function ponerHuevos()
    {
        return "Poniendo huevos..";
    }
}

class Aguila implements AveVoladoras, AvePonedoras{
    public function volar()
    {
        return "Las aguilas vuelan";
    }

    public function ponerHuevos()
    {
        return "Las aguilas ponen huevos";
    }
}

?>