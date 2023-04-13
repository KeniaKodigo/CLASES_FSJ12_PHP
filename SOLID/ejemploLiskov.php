<?php

class Vehiculo{

    public function gasolina(){
        //code..
    }

    public function diesel(){
        //code..
    }
}

class Camion extends Vehiculo{

}

class Bicicleta extends Vehiculo{

}

class Auto extends Vehiculo{

}

/** solucion, clase abstracta */
abstract class VehiculoGas{
    abstract public function gasolina();
}

abstract class VehiculoDis{
    abstract public function diesel();
}

class Camion2 extends VehiculoGas{
    public function gasolina()
    {
        return "El camion utiliza gasolina";
    }
}

class Auto2 extends VehiculoDis{
    public function diesel()
    {
        return "El auto ocupa diesel";
    }
}

class Bicicleta2{
    
}


?>