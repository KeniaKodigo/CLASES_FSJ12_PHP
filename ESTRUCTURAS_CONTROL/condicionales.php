<?php

/**
 * if-else, if-else if-else, switch, operador ternario
 */

#if-else: evalua una condicion

$num = "257896";
$num2 = [2,5,7,8,9];
$num3 = 45;

#Trabajando con el operador ternario
echo $num2[0] == 5 ? "El numero inicia en 5" : "El numero no inicia en 5";

echo strlen($num);
for($i = 0; $i < strlen($num); $i++){
    if($num[0] == 5){
        echo "El numero inicia en 5";
    }else{
        echo "El numero no inicia en 5";
    }
}

if($num3 % 10 == 5){
    echo "El numero termina en 4";
}else{
    echo "El numero no termina en 5";
}

$a = 5;
$b = 8;

$a = $b - $a; //3
$b = $a + $b; //









?>