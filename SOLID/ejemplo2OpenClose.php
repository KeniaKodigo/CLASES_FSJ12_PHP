<?php

/**
 * OpenClosed
 */

 #violando el principio de open close: Trabajando con condicionales estamos diciendo que con el tiempo va surgir una nueva condicion
class Figura{
    public function dibujar($figura){
        if($figura == "Cuadro"){

        }else if($figura == "Circulo"){

        }else if($figura == "Estrella"){

        }
    }
}

#aplicando el principio openClosed
abstract class Figura2{
    abstract function dibujar();
}

class Cuadro extends Figura2{
    public function dibujar()
    {
        //code.. para dibujar un cuadro
    }
}

class Circulo extends Figura2{
    public function dibujar()
    {
        //code.. para dibujar circulos
    }
}

class Estrella extends Figura2{
    public function dibujar()
    {
        //code.. para dibujar estrellas
    }
}

class Triangulo extends Figura2{
    public function dibujar()
    {
        //code.. para dibujar triangulos
    }
}

?>