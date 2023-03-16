<?php
/**
 * array_filter = devuelve un nuevo arreglo en base a la condicion
 * 
 * primer parametro = hace referencia al arreglo a condicionar
 * segundo parametro = funcion anonima que hace la condicion
 */

 $arreglo_edades = array(
    //creando otros array con clave y valor
    array("nombre" => "Julio", "edad" => 25),
    array("nombre" => "Maria", "edad" => 30),
    array("nombre" => "Roxana", "edad" => 17),
    array("nombre" => "Jose", "edad" => 32)
);

$mayores = array_filter($arreglo_edades, function($persona){
    //condicionamos que la clave edad sea mayor a 18
    return $persona["edad"] > 18;
});

print_r($mayores);

$arreglo2 = [7,4,15,20,89];
$numeros_mayores = array_filter($arreglo2, function($numero){
    return $numero > 15;
});

print_r($numeros_mayores);


?>