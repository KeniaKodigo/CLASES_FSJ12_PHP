<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: red;
    }
</style>
<body>
    <h1>Conociendo Sintaxys de PHP</h1>
    <!-- trabajando con php -->
    <?php
        /**
         * primera forma de comentar
         * otros delimitadores: <? ?>, <% %>, <script language="PHP"> (delimitador defasado)
         */
        
        //asignacion de variables y tipos de datos
        $saludo = "<h2>Hola chicos del FSJ12</h2>"; //cadena(string)
        $numero = 5; //entero
        //$saludo = 10;
        $booleano = FALSE; //true, booleano
        $double = 5.8; //double, float
        $nulos = null; //null
        $indefinida;
        //definiendo arreglos
        $array1 = array("manzana",10,8,null,true);
        //true = 1; false = 0;
        $array2 = ["uva","pera",12.5,8];
        //definiendo objetos
        /**
         * de esta forma lo hacemos en javascript
         *  animal = {nombre: "pancho", edad: 4}
         * */
        
        #esta forma es con php
        class Animal{
            //asigno los atributos para el objeto con su modificador de acceso (public, protected, private)
            public $nombre;
            protected $edad;
            private $dui;
            
            //asignando metodo para el objeto
            public function obtenerNombre($variable){
                $this->nombre = $variable;
            }
        }

        $animal = new Animal();
        $animal->nombre = "Pancho";

        #otra forma de crear objetos, stdClass es una clase por default de php
        $persona = new stdClass();
        $persona->nombre = "Samuel";
        $persona->apellido = "Moran";
        $persona->edad = 30;

        $persona2 = new stdClass();
        $persona->nombre = "Maria";
        $persona->apellido = "Huezo";
        $persona->edad = 28;

        //definiendo una constante que siempre tiene que ir en mayuscula
        define("PI", 3.1416);
        //llamando a la constante
        echo PI;
        const SALUDO2 = "Estamos con PHP";
        echo SALUDO2;
        define("PERSONAS", array("kevin","katherin","oscar","fatima"));
        //segunda forma de comentar
        #tercera forma de comentar

        #Formas de imprimir: echo (solo imprime cadenas), print, print_r: podemos imprimir arreglos y objetos, var_dump(): imprime arreglos, objetos con su tipo de dato
        echo $numero + "5";
        echo "<br>"; //haciendo un salto de linea con html
        print $double;
        print_r($array1); //imprime posicion + valor
        var_dump($array2); //imprime tipo de datos + posicion + valor
        print_r($animal); //imprimiendo el objeto de la clase Animal
        echo '<br> $saludo'; //lo toma como cadena literalmente
        echo "<br> $saludo"; //reconoce la etiqueta html y la variables
        //explicacion de las comillas: comillas dobles "" (podemos tener html, concatenar variables), comillas simples '' (solo devuelven cadenas)
        echo $saludo;
        echo "\n"; //salto de linea desde consola

        $numero3 = 10;
        //declarando una funcion
        function calcularOperacion($numero1, $numero2){
            //$GLOBALS => transforma una variable de manera global
            /**
             * Prioiridad de Operadores Artimeticos:
             * 1. ()
             * 2. * / % (mod)
             * 3. + -
             */
            $numero4 = 5;
            return ($numero1 + $numero2 + $GLOBALS["numero4"]) * $GLOBALS["numero3"];
        }
        $numero4 = 25;
        //echo $numero2;
        echo calcularOperacion(8,10);

        //manera de concatenar es con el punto (.)
        echo "El valor del numero es " . $numero4 . "<br>";
        echo "125" . $numero4 . "<br>"; //concatenando
        echo "125.2" * $numero4; //sumando
        echo "<br>";
        $decimal = 25.36;
        var_dump($decimal);
        //settype() => podemos cambiar el tipo de datos
        settype($decimal, "string");
        var_dump($decimal);

        $cadena2 = 78;
        settype($cadena2, "float");
        var_dump($cadena2); 

        $arreglo3 = [5,8,9,7,1];
        var_dump($arreglo3);
        var_dump($animal);


    ?>
</body>
</html>




