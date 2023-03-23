<?php
/**
 * QuickSort: Es un algoritmo de ordenamiento que toma en cuenta un pivote y evalua 
 * si la posicion es menor el elemento va a la izquierda y si es mayor a la derecha
 */

function quickSort2($arreglo){
    if(count($arreglo) <= 1){
        return $arreglo;
    }else{
        /** tomando en cuenta la ultima posicion del arreglo como pivote */
        /*$indice = count($arreglo) - 1; //5
        $pivote = $arreglo[$indice];*/

        #end() => captura la ultima posicion del arreglo con su valor
        $pivote = end($arreglo);
        $left = array();
        $right = array();

        for($indice = 0; $indice < count($arreglo) - 1; $indice++){
            if($arreglo[$indice] < $pivote){
                /** 
                 * array_push(): agregamos elementos al final de un arreglo
                 */
                array_push($left, $arreglo[$indice]);
            }else{
                array_push($right, $arreglo[$indice]);
            }
        }
        return array_merge(quickSort2($left), array($pivote), quickSort2($right));
    }
}

$arreglo = [7,8,9,15,2];
print_r(quickSort2($arreglo));
?>