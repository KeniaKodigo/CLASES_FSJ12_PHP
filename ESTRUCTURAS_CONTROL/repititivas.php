<?php
/**
 * for, while, do while, foreach
 */

 /**
  * strlen() => calcular el tamaño de una cadena
  * count() => calcula el tamaño de un arreglo
  */
$cadena = "Hello World 5";

for($i = 0; $i < strlen($cadena); $i++){
    /**
     * $cadena[0] = H
     * $cadena[1] = e
     * $cadena[2] = l
     * ..
     */
    echo $cadena[$i] . "<br>";
}

echo "<b>Decrementando el arreglo</b><br>";
/** $j - 1 */
for($j = strlen($cadena) - 1; $j >= 0; $j--){
    /**
     * $cadena[10] = d
     * $cadena[9] = l
     * $cadena[8] = r
     * $cadena[7] = o
     */
    echo $cadena[$j] . "<br>";
}

$arreglo = ["cebollas", "tomates", "guisquil", "zanahoria"];
for($k = 0; $k < count($arreglo); $k++){
    echo $arreglo[$k] . "*";
}

$arreglo2 = [7,8,9,125,14];
/** 
 * while = contador, condicion, incremento o decremento
 */
echo "<br>";
$contador = 0;
$suma = 0;
while($contador < count($arreglo2)){
    /**
     * 0 = 0 + 7
     * 7 = 7 + 8
     * 15 = 15 + 9
     * ...
     */
    //$suma = $suma + $arreglo2[$contador];
    $suma += $arreglo2[$contador];
    $contador++;
    echo $suma . "<br>";
}

$contador2 = 10;
while($contador2 <= 20){
    echo $contador2 . "<br>";
    $contador2++;
}

/**
 * do while: siempre se ejecuta la primera vez y despues condiciona
 */
echo "<b>Decrementando un arreglo con do while</b><br>";
$arreglo3 = ["celular",58,null, "tablet",14.5];
$contador3 = count($arreglo3) - 1;
do{
    /**
     * $arreglo3[4] = 14.5
     */
    $arreglo3[$contador3] . "<br>";
    $contador3--;
}while($contador3 >= 0);

$contador4 = 5;

do{
    $contador4++;
    echo $contador4;
}while($contador4 < 25);

/**
 * Foreach: Solamente lo trabajamos con arreglos
 */

echo "<br><b>Utilizando foreach para el arreglo</b><br>";
$arreglo4 = ["manzana","peras","naranjas","papayas"];
//arreglo + variable temporal
foreach($arreglo4 as $value){
    echo $value . " ";
}

$arreglo5 = [1,2,3,4,5,8];
$multiplicar = 1;
echo "<br>";
foreach($arreglo5 as $numero){
    $multiplicar *= $numero;
    echo $multiplicar . " ";
}



?>