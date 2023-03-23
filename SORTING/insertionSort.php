<?php
/**
 * InsertionSort: Algoritmo de ordenamiento que se basa en la insercion de los elementos y ubica el elemento donde debe de estar
 * 
 * Iterar, condicionar, intercambio, repetir el proceso
 */


function insertionSort($arreglo){
    for($i=0; $i < count($arreglo); $i++){ //0 + 1 = 1 + 1 = 2 + 1 = 3 + 1 = 4
        /**
         * [5,10,8,1,3]
         * 
         * posicion i
         * arreglo[0] = 1
         * arreglo[1] = 5
         * arreglo[2] = 8
         * arreglo[3] = 10
         * arreglo[4] = 3 <-
         * 
         * 
         * comparaciones
         * [5,8,10,1,3]
         * [1,5,8,10,3]
         * [1,3,5,8,10]
         * 
         */
        $valor = $arreglo[$i]; //5, 10, 8, 1, 3
        //echo $valor . "\n";
        $j = $i - 1; // -1, 0, 1, 2, 3
        echo "Valor j " . $j . "\n";
        /**
         * posicion j
         * arreglo[0] = 1 <-
         * arreglo[1] = 3 <-
         * arreglo[2] = 5 <-
         * arreglo[3] = 8 <-
         * arreglo[4] = 10
         */
        while($j >= 0 && $valor < $arreglo[$j]){
            //entra con la posicion 1 = 10

            //intercambio
            //arreglo[2] = 10
            //arreglo[3] = 10

            //arreglo[2] = 8
            //arreglo[1] = 5
            //arreglo[4] = 10
            //arreglo[3] = 8
            //arreglo[2] = 5
            $arreglo[$j + 1] = $arreglo[$j]; //10, 10, 8, 5, 10, 8, 5
            echo "Valores del arreglo del while, j + 1: " . $arreglo[$j + 1] . "\n";
            $arreglo[$j] = $valor; //8, 1, 1, 1, 3, 3, 3
            $j = $j - 1; //0, 1, 0, -1, 2, 1, 0
            echo "J que va dentro del while " . $j . "\n";
        }

    }
}

insertionSort([5,10,8,1,3]);
?>