<?php
/**
 * BubbleSort: Algoritmo de ordenamiento que revisa elemento por elemento de una matriz y en base una condicion va intercambiando los elementos y repite el proceso hasta que se ordena.
 * 
 * Iterar, comparar, intercambiar, repetir el proceso
 */

function BubbleSort($array){
    /**
     * count(): metodo para calcular el tamaño de un arreglo
     * strlen(): metodo para calcular el tamaño de una cadena
     */

    //ciclo que verifica si tengo que volver a entrar al segundo ciclo para ordenar el arreglo
    for($i = 0; $i < count($array); $i++){
        //ciclo que se encarga de evaluar elemento por elemento 
        /**
         * $arreglo = [5,10,8,1,3]
         */
        for($j =0; $j < count($array) - 1; $j++){
            //comparando los elementos e intercambiandolos

            /**
             * [5,10,8,1,3]
             * //primera iteracion del primer ciclo
             * 1compa = [5,10,8,1,3]
             * 2compa = [5,8,10,1,3]
             * 3compa = [5,8,1,10,3]
             * 4compa = [5,8,1,3,10]
             * 
             * //segunda iteracion del primer ciclo
             * 5compa = [5,8,1,3,10]
             * 6compa = [5,1,8,3,10]
             * 7compa = [5,1,3,8,10]
             * 8compa = [5,1,3,8,10]
             * 
             * //tercera iteracion del primer ciclo
             * 9compa = [1,5,3,8,10]
             * 10compa = [1,3,5,8,10]
             * 11compa = [1,3,5,8,10]
             * 12compa = [1,3,5,8,10]
             * 
             */
            //5 > 10, 10 > 8, 10 > 1, 10 > 3
            if($array[$j] > $array[$j + 1]){
                //haciendo el intercambio
                $variable_temporal = $array[$j + 1]; //8, 1, 3, 1, 3, 1, 3
                $array[$j + 1] = $array[$j]; //10, 10, 10, 8, 8, 5
                $array[$j] = $variable_temporal; //8, 1, 3, 1, 3, 1, 3
            }
        }

        /*for($j = count($array) -1; $j >= 0; $j--){
            if($array[$j] < $array[$j - 1]){

            }
        }*/
    }
    print_r($array); //[1,3,5,8,10]
}

BubbleSort([5,10,8,1,3]);


?>