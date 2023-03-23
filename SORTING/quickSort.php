<?php
/**
 * QuickSort: Es un algoritmo de ordenamiento que toma en cuenta un pivote y evalua 
 * si la posicion es menor el elemento va a la izquierda y si es mayor a la derecha
 */
function quickSort($arreglo){
    /** validando que el arreglo tenga mas de un valor */
    if(count($arreglo) <= 1){
        return $arreglo;
    }else{
        $pivote = $arreglo[0]; //tomando en cuenta la primera posicion
        $left = array();
        $right = array();

        for($indice = 1; $indice < count($arreglo); $indice++){
            if($arreglo[$indice] < $pivote){
                /** 
                 * array_push(): agregamos elementos al final de un arreglo
                 */
                array_push($left, $arreglo[$indice]);
            }else{
                array_push($right, $arreglo[$indice]);
            }
        }

        /** fusionando los arreglos mas el pivote */
        #array_merge => fusiona mas de un arreglo
        return array_merge(quickSort($left), array($pivote), quickSort($right));
    }
}

print_r(quickSort([10,8,20,5]));

?>