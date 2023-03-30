<?php

// Código sin refactorizar
if ($a > $b) {
    $c = $a - $b;
} else {
    $c = $b - $a;
}


// Código sin refactorizar
if ($a == 1) {
    $x = 10;
} else {
    $x = 20;
}

if ($a == 1) {
    $y = 100;
} else {
    $y = 200;
}

// Código sin refactorizar
if ($a == 1) {
    $x = 10;
} else {
    $x = 20;
}

if ($b == 2) {
    $y = 100;
} else {
    $y = 200;
}

// Código sin refactorizar
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

$resultado1 = sumar(10, 5);
$resultado2 = restar(10, 5);


?>