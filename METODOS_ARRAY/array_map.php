<?php
/**
 * array_map() => Hace un mapeo del arreglo y te devuelve uno nuevo pero siempre con las mismas posiciones
 */

$arreglo = [7,4,15,20,89]; //[8,5,16,21,90]

echo "<h1>Haciendo un mapeo</h1>";
/**
 * primer parametro = es una funcion anonima que tendra el proceso de incrementar los numero en 1
 * segundo parametro = arreglo que se va mapear
 */

$nuevo = array_map(function($numero){
    /**
     * $numero[0] = 7 = 8
     * $numero[1] = 4 = 5
     * $numero[2] = 15 = 16
     * $numero[3] = 20 = 21
     * $numero[4] = 89 = 90
     */
    return $incremento = $numero + 1;
    echo "Numero incrementado: " . $incremento;
}, $arreglo);

print_r($nuevo);

$arreglo2 = ["julio", "maria", "roxana","jose"];

array_map(function($nombre){
    echo "Tu nombre es: " . $nombre . "<br>";
}, $arreglo2);

/**
 * array = [
 *      {
 *          nombre: "",
 *          apellido: ""
 *      },
 *      {
 *      }
 * ]
 */

#Array asociativos: Es un conjunto de arreglos

$arreglo_edades = array(
    //creando otros array con clave y valor
    array("nombre" => "Julio", "edad" => 25),
    array("nombre" => "Maria", "edad" => 30),
    array("nombre" => "Roxana", "edad" => 17),
    array("nombre" => "Jose", "edad" => 32)
);

array_map(function($persona){
    /**
     * $persona[0] => array(nombre, edad)
     * $persona[1] => array(nombre, edad)
     * $persona[2] => array(nombre, edad)
     * $persona[3] => array(nombre, edad)
     */
    //asignamos clave del array asociativo
    return "<b>Nombre: </b>" . $persona["nombre"] . "<b>Edad: </b> " . $persona["edad"] . "<br>";
}, $arreglo_edades);




?>