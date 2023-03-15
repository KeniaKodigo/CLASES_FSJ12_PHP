<?php

/**
 * require: Trabaja de manera estricta con los errores (deja de ejecutar el programa)
 * include: Trabaja de manera flexible con los errores (tira la advertencia pero sigue ejecutandose)
 * con el include podemos dividir nuestro html e incluirlo en otra
 */

require "conceptos.php";

include "conceptos.php";

// los dos puntos ../ indican que vamos saliendo de la carpeta en la que estamos
require "../ejemplo2.php";
$numero4 = 58;
echo calcularOperacion(15,20);

$animal2 = new Animal();
$animal2->nombre = "Talio";

?>