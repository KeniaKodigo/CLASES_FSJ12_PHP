<?php


class Cargador12V{
    public function cargar(){
        return "Estas utilizando un cargador de 12V";
    }
}


class Cargador24V{
    public function cargar(){
        return "Estas utilizando un cargador de 24V";
    }
}


#solucion

/** creamos la clase adaptadora */
class AdapterCargador12V extends Cargador24V{
    //crear un atributo privado 
    private $cargador12;

    //crear un constructor que reciba objeto de la clase que quiero adaptar
    public function __construct(Cargador12V $cargador)
    {
        $this->cargador12 = $cargador;
    }

    //llamar al metodo de la clase Cargador24V y cambiarle su comportamiento
    public function cargar(){
        return "Utilizando un adaptador para cargadores de 12Volteos";
    }
}



class Celular{
    //acceso a la clase Cargador24V, AdapterCargador12V
    public function obtenerCargador(Cargador24V $cargador){
        return $cargador->cargar();
    }
}

$cel = new Celular();
$clase = new Cargador12V();
echo $cel->obtenerCargador(new AdapterCargador12V($clase));

echo "<br>";
$cel2 = new Celular();
echo $cel2->obtenerCargador(new Cargador24V());

?>