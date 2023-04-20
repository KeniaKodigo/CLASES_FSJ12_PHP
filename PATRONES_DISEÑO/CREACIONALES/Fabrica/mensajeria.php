<?php

class Trans_Camion{
    public function entregas(){
        return "Las entregas se estan enviado por via camion";
    }

    public function reporte(){

    }

    public function gestionEntregasSalidas(){

    }
}

$transporte = new Trans_Camion();

#Pasos para utilizar el patron del metodo de fabrica

#paso1 => crear una interfaz para los productos o objetos que yo voy a crear
/**
 * productos: Clase camion, clase Barco, clase avion
 */

interface Transporte{
    public function entregas();
}

class Camion2 implements Transporte{
    public function entregas()
    {
        return "Las entregas se estan enviado por via camion";
    }
}

class Barco implements Transporte{
    public function entregas()
    {
        return "Las entregas se estan enviado por via barco";
    }
}

class Avion implements Transporte{
    public function entregas()
    {
        return "La entrega se hara por via avion";
    }
}

#paso 2 => crear el metodo de fabrica (super clase)

abstract class Fabrica{
    /**
     * paso 3 => asignamos un metodo abstracto que reciba objetos de la interfaz
     */
    abstract function obtenerTransporte() : Transporte; //obligamos a la clase que herede este metodo a retornar la instancia de alguna clase que implemente la interfaz

    /**
     * paso 4 => asignamos un metodo que devuelve el comportamiento de la clase que instanciamos de la interfaz
     */
    public function imprimirEntregas(){
        /**
         * llamamos al metodo abstracto y le retornamos el comportamiento que viene de la interfaz
         */
        $transporte = $this->obtenerTransporte();
        return $transporte->entregas();
    }
}

#paso 5 => crear las clases que dependan del metodo de fabrica
class MensajeriaTerrestre extends Fabrica{

    public function obtenerTransporte(): Transporte
    {
        return new Camion2(); 
    }
}


class MensajeriaMaritima extends Fabrica{
    public function obtenerTransporte(): Transporte
    {
        return new Barco();
    }
}

class MensajeriaAerea extends Fabrica{
    public function obtenerTransporte(): Transporte
    {
        return new Avion();
    }
}

/**
 * recibiendo datos del metodo de fabrica
 */

function obtenerSubFabrica(Fabrica $fabrica)
{
    return $fabrica->imprimirEntregas();
}


echo obtenerSubFabrica(new MensajeriaTerrestre); /**
    * mandamos a imprimir informacion del objeto Camion
 */
echo "<br>";

echo obtenerSubFabrica(new MensajeriaMaritima); /** devuelve la informacion del barco */

echo "<br>";
echo obtenerSubFabrica(new MensajeriaAerea); /** devuelve la informacion del avion */

?>