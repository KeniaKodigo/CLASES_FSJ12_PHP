<?php

class Word7{
    public function documento(){
        return "Patrones de diseño en word de la version 7";
    }
}

class Word10{
    public function documento(){
        return "Comando de git en word de la version 10";
    }
}

#creando un adapter para que se puedan recibir documento de word 7
class AdapterWord7 extends Word10{
    #create un atributo privado, para que haga referencia al objeto de la clase que queres adaptar
    private $word7;

    #create un constructor que reciba objeto de la clase que vas adaptar
    public function __construct(Word7 $value) //$value hace referencia a todo lo que tiene la clase Word7
    {
        $this->word7 = $value;
    }

    #sobreescribiendo el metodo documento()
    public function documento()
    {
        //return $this->word7->documento(); //Patrones de diseño...
        return "El documento de Patrones de diseño esta con la version 7 pero estamos utilizando un adaptador para que se muestre en la version 10";
    }
}


class Windows10{
    //acceso a la clase Word10 y al adapter
    public function obtenerDocWord(Word10 $word){
        return $word->documento();
    }
}


$operativo = new Windows10();
echo $operativo->obtenerDocWord(new Word10);

echo "<br>";
$operativo2 = new Windows10();
echo $operativo2->obtenerDocWord(new AdapterWord7(new Word7));

?>