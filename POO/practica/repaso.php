<?php
/**
 * programacion orientada a objetos vs programacion estructurada
 * 
 * 
 * POO: Es un estilo de programacion que se basa en clases y objetos
 * atributos, metodos
 * 
 * ¿Que es una clase? Es una plantilla que tiene los atributos y metodos de un objeto
 * 
 * ¿Que es un objeto? Es una entidad donde describimos sus caracteristicas (atributos y metodos)
 * 
 * atributos: caracteristicas del objeto
 * metodos: es el comportamiento del objeto
 * 
 * Pilares de programacion: Abstraccion, Herencia, Polimorfismo, Encapsulamiento
 * 
 * Abstraccion: Es la manera de como podemos extraer lo relevante para trabajar con la clase
 * 
 * Encapsulamiento: Restringir el acceso a lo que tiene la clase (atributos, metodos)
 * => modificador de acceso: private, public, protected
 * 
 * public: acceso general (dentro de la clase, fuera de la clase, clases heredadas)
 * protected: 2 tipos de acceso (dentro de la clase, clases heredadas)
 * private: 1 tipo de acceso (dentro de la clase), para trabajar con un atributo privado necesitamos get y set
 * 
 * get() => retorna o imprime el valor del atributo privado //10
 * set(10) => capturar el valor del atributo privado, NOTA: el set siempre lleva un parametro
 * 
 * Herencia: Es la manera de como podemos reutilzar codigo de otra 
 * mala practica: herede de una clase metodos, atributos innecesarios, no utilizar los principios SOLID
 * buena practica: aplicar los principios SOLID
 * 
 * Polimorfismo: Un objeto puede cambiar de forma (sobreescribimos los metodos de la clase padre para cambiarle su comportamiento)
 * 
 * constructor: Inicializa los datos del objeto que vamos a crear (atributos)
 * 
 * clase abstracta: Son clases que no pueden ser instanciadas (no crean objetos) solamente heredadas, para que sea abstracta tiene que tener como minimo un metodo abstracto (osea un metodo sin comportamiento)
 * 
 * Programacion estructurada: Es un estilo de programacion que se basa en funciones y estructuras de control (condicionales (if, switch, operador ternario), bucles (for, foreach, while, do while))
 */

function multiplicar(){
    //code..
}

function restar(){

}

class Calculadora{
    //num1, num2
    protected $num1;
    protected $num2;
    private $residuo; //get, set
    private $cosiente; //get, set

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar(){
        return $this->num1 + $this->num2;
    }

    private function dividir(){
        //code..
        return $this->num1 / $this->num2;
    }

    public function resultadoDivision(){
        $this->dividir();
    }

    public function sumarDecimales(){
        //code..
    }
}

class Cientifica extends Calculadora{

    public function calcularRaiz(){
        $this->num1;
    }

    /** sobreescribiendo el metodo */
    public function sumarDecimales()
    {
        return new Exception("Con la cientifica no sumamos decimales");
    }
}

abstract class Producto{
    //atributos, metodos
    abstract function describirProduct();
}

class Venta extends Producto{

    public function describirProduct()
    {
        //code..
    }
}

/** instanciando una clase */
$cal = new Calculadora(10,100); //creando un nuevo objeto
echo $cal->sumar(); //indefinido, //110

$cal3 = new Calculadora(68,73);
$cal3->sumar();

$cal2 = new Cientifica(78,45);
$cal2->resultadoDivision();

?>