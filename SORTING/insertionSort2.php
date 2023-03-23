<?php

function insertionSort2($arreglo){

    for($indice1 = 0; $indice1 < count($arreglo); $indice1++){
        $valor_posicion = $arreglo[$indice1];
        //echo $valor_posicion;
        $indice2 = $indice1 - 1;

        while($indice2 >= 0 && $valor_posicion < $arreglo[$indice2]){
            $arreglo[$indice2 + 1] = $arreglo[$indice2];
            $arreglo[$indice2] = $valor_posicion;
            $indice2 = $indice2 - 1;
        }
    }
}

insertionSort2([10,8,20,5]);

?>