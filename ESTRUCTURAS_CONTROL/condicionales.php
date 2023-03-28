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

#if anidado

$edad = 28;
if($edad > 10){
    echo "Entra a la adolescencia";
    if($edad == 15){
        echo "Ya casi tenes 18";
    }else{
        echo "Todavia no estas cerca de los 18";
    }
}

#utilizando el if compuesto (if-else if-else)
echo "<br>";
//evaluando las estaciones del año
$estacion = "Primavera";
if($estacion == "Verano"){
    echo "Estas en verano";
}else if($estacion == "Primavera"){
    echo "Estas en primavera";
}else if($estacion == "Otoño"){
    echo "Estas en otoño";
}else if($estacion == "Invierno"){
    echo "Estas en invierno";
}else{
    echo "Ingresa una estacion del año";
}

//evaluando dias de la semana y saber si ese dia se trabaja o no se trabaja
$dias = "Viernes";

switch($dias){
    case "Domingo":
        echo "Los domingos son descanso";
        break;
    case "Lunes":
        echo "Los lunes se trabaja";
        break;
    case "Martes":
        echo "Los martes se trabaja";
        break;
    case "Miercoles":
        echo "Los miercoles se trabaja";
        break;
    case "Jueves":
        echo "Los jueves se trabaja";
        break;
    case "Viernes":
        echo "Los viernes se trabaja";
        break;
    case "Sabado":
        echo "Los sabados se trabaja hasta el mediodia";
        break;
    default:
        echo "Ingresa un dia de la semana";
}

if($dias == "Lunes" || $dias == "Martes" || $dias == "Miercoles" || $dias == "Jueves" || $dias == "Viernes"){
    echo "Es un dia de trabajo";
}else if($dias == "Sabado"){
    echo "Estas trabajando hasta el mediodia";
}else if($dias == "Domingo"){
    echo "Estas descansando";
}else{
    echo "Ingresa un dia de la semana";
}











?>